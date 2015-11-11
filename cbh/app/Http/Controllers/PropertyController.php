<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use Auth;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store()
    {   
        if(!Auth::check()) {
            return redirect('submit');
        }

        $input = Request::all();

        //echo var_dump($input);
        //break;

        $id = uniqid();
        $destPath = 'uploads/' . $id;

        mkdir($destPath);

        // Create a string to hold all features associated with a property, stored in a single cell of the DB
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
        $features .= isset($_POST['pool-gym']) ? $_POST['pool-gym']         . ' | ' : '';
        $features .= isset($_POST['tv']) ? $_POST['tv']                     . ' | ' : '';
        $features .= isset($_POST['washer-dryer']) ? $_POST['washer-dryer'] . ' | ' : '';

        // Images
        $featured_image = $input['featured']; //Input::file('featured');

        $images = Input::file('images');
        $image_count = count($images);
        $image_upload = 0;

        //Enforcing file formats of JPG or PNG.
        $rules = ['image/jpeg', 'image/png'];

        // Move our featured image to the destination folder.
        if(in_array($featured_image->getClientMimeType(), $rules)) {
            $upload_success = $featured_image->move($destPath, $featured_image->getClientOriginalName());
        }
        
        // Move the remaining images in the gallery to the destination folder.
        foreach ($images as $img) {
             if(in_array($img->getClientMimeType(), $rules)) {   
                //move to location 'uploads/{property_id}/imagename.jpg'
                $upload_success = $img->move($destPath, $img->getClientOriginalName());
                $image_upload++;
            }
        }

        if($image_upload == $image_count) 
        {
            Session::flash('success', 'Upload Successful!');
            //NOTE MUST CALL stripslashes(str) ON ACCESS TO ALL STRING FIELDS
            DB::insert( constant('INSERT_INTO_PROPERTIES') . ' VALUES(\''
                . $id . '\', \''
                . true . '\', \''
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

    public function propertydetail() {
        return view('property.detail');
    }

    public function listlines() {
        return view('property.list-lines');
    }

    public function listgrid() {
        return view('property.list-grid');
    }

    public function listmasonry() {
        return view('property.list-masonry');
    }


}
