<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use Auth;
use Mail;
use Request;
use Input;
use Validator;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{

    public function __construct() {
        include_once(app_path()."/queries.php");
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    // Check post for isset in the case of every feature possible to be associated with a property. Format as 
    // a pipe separate string.
    public function getFeatures() {
        $features = '| ';
        $features .= isset($_POST['ac-and-heat']) ? $_POST['ac-and-heat']   . ' | ' : '';
        $features .= isset($_POST['microwave']) ? $_POST['microwave']       . ' | ' : '';
        $features .= isset($_POST['toaster']) ? $_POST['toaster']           . ' | ' : '';
        $features .= isset($_POST['park']) ? $_POST['park']                 . ' | ' : '';
        $features .= isset($_POST['bedding']) ? $_POST['bedding']           . ' | ' : '';
        $features .= isset($_POST['smoking']) ? $_POST['smoking']           . ' | ' : '';
        $features .= isset($_POST['pots-pans']) ? $_POST['pots-pans']       . ' | ' : '';
        $features .= isset($_POST['balcony']) ? $_POST['balcony']           . ' | ' : '';
        $features .= isset($_POST['internet']) ? $_POST['internet']         . ' | ' : '';
        $features .= isset($_POST['garage']) ? $_POST['garage']         . ' | ' : '';
        $features .= isset($_POST['tv']) ? $_POST['tv']                     . ' | ' : '';
        $features .= isset($_POST['washer-dryer']) ? $_POST['washer-dryer'] . ' | ' : '';

        return $features;
    }

    public function getCoords($input) {

        // Call Maps API to access the lat and lng of each property, but we only do this once per upload. Needs to be
        // stored in the DB
        $ch = curl_init();

        $address = $input['submit-address'] . ' ' . $input['submit-city'] . ' ' . $input['submit-province'];
        $address = urlencode($address);
        $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Canada";

        /*
            The above call allows users to enter bad input, but this results strange behavior from the Maps API. 
            e.g. I enter 123 Fake Street, Thorold, and the API was smart enough to just place a pointer on the 
            lat and lng of Thorold, ignoring the street it couldn't find. How can we account for this? If the user 
            enters bad input we should try to prompt them to reenter, but this requires detection. 

            As an additional example of the API being smart, 108 Jacobson Ave is still found when I type "108 Jabson Street"
            It will be difficult to decipher it has been found or not.

            Maybe we shouldn't even put the user's direct input into the DB, the return from the API will be cleaner.
        */

        // Set curl exec options.
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = json_decode(curl_exec($ch));

        // Return values storage.
        $results = [0.0, 0.0];

        // Get lat and lng for interactive map pin.
        $results[0] = ($response->results[0]->geometry->location->lat);
        $results[1] = ($response->results[0]->geometry->location->lng);

        // Terminate the curl session.
        curl_close($ch);

        return $results;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store()
    {   
        if(!Auth::check()) {
            // Can probably do a redirect with all the $input so the user doesn't have to retype everything.
            return redirect('signin');
        }

        // Get input
        $input = Request::all();

        // Set property ID and create destination folder for images. 
        $id = uniqid();
        $destPath = 'uploads/' . $id;
        mkdir($destPath);

        // Get coordinates (lat, lng) for the given address. This calls the Google Maps API.
        $coords = $this->getCoords($input);
        $lat = $coords[0];
        $lng = $coords[1];

        // Create a string to hold all features associated with a property, stored in a single cell of the DB
        // as a pipe separated string
        $features = $this->getFeatures();

        // Get the featured image. This is required in the form as a property needs a thumbnail.
        $featured_image = $input['featured'];

        //Enforcing file formats of JPG or PNG.
        $rules = ['image/jpeg', 'image/png'];

        // Move our featured image to the destination folder.
        if(in_array($featured_image->getClientMimeType(), $rules)) {
            $upload_success = $featured_image->move($destPath, $featured_image->getClientOriginalName());
        }

        $image_upload = 0;
        $image_count = 0;
        
        // Move the remaining images in the gallery to the destination folder. Images are optional so check 
        // if the variable is set first.
        if(isset($_POST['images'])) {

            // Get the remaining images, if there are any. An extra gallery is optional.
            $images = Input::file('images');
            $image_count = count($images);

            foreach ($images as $img) {
                if(in_array($img->getClientMimeType(), $rules)) {   
                    //move to location 'uploads/{property_id}/imagename.jpg'
                    $upload_success = $img->move($destPath, $img->getClientOriginalName());
                    $image_upload++;
                }
            }
        }

        if($image_upload == $image_count || !isset($_POST['images'])) {
            Session::flash('success', 'Upload Successful!');

            //NOTE MUST CALL stripslashes(str) ON ACCESS TO ALL STRING FIELDS
            DB::insert( constant('INSERT_INTO_PROPERTIES') . ' VALUES(\''
                . $id . '\', \''
                . true . '\', \''
                . $lat . '\', \''
                . $lng . '\', \''
                . $input['submit-price'] . '\', \''
                . $input['submit-area'] . '\', \''
                . addslashes($input['submit-title']) . '\', \''
                . addslashes($input['submit-description']) . '\', \''
                . addslashes($input['submit-address']) . '\', \''
                . addslashes($input['submit-city']) . '\', \''
                . $input['submit-province'] . '\', \''
                . $input['submit-property-type'] . '\', \''
                . $features . '\', \''
                . $input['submit-rooms'] . '\', \''
                . $input['submit-baths'] . '\', \''
                . $input['submit-distance-to-school'] . '\', \''
                . $input['submit-walk-to-bus'] . '\', \''
                . $destPath . '/' . $featured_image->getClientOriginalName() . '\', \''
                . $destPath . '\', \''
                . Auth::user()->email . '\', \''
                . date("Y-m-d H:i:s") . '\', \''
                . date("Y-m-d H:i:s") . '\', \''
                . date("Y-m-d H:i:s") . '\');'
                );

            return redirect('/');
        } else {
            Session::flash('error', 'Error uploading files.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function submit() {
        return view('property.submit');
    }

    public function propertydetail($id) {
        $data = DB::select(constant("PROPERTIES_BY_ID") . "'$id'");

        if(count($data) != 1) {
            return redirect('notfound');
        } else {
            $data = $data[0];
        }
        return view('property.detail')->with('data', $data);
    }

    public function contactlandlord() {

        $input = Request::all();

        Mail::send('emails.contactlandlord', 
            ['name'  => $input['form-contact-agent-name'], 
             'email' => $input['form-contact-agent-email'], 
             'body'  => $input['form-contact-agent-message'],
             'landlord_name'  => $input['landlord-name'],
             'landlord_email' => $input['landlord-email'],
             'property_id' => $input['property-id'],
             'property_address' => $input['property-address'],
             'footer'=> "Copyright &copy; 2015. Cross Border Housing Inc. All Rights Reserved."],
             function($message) use($input) {
                $message->from($input['form-contact-agent-email'], $input['form-contact-agent-name']);
                $message->cc('j_earle@hotmail.com', 'James Earle');
                $message->to('requests@cbhousing.ca', 'Cross Border Housing Inc.');
                $message->subject('Question From: ' . $input['form-contact-agent-name'] . ' for ' . $input['landlord-name']);
             });

        return redirect('/');
    }

    public function listlines() {
        return view('property.list-lines');
    }

}
