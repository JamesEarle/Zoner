<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use Request;

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
        $input = Request::all();

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

        echo $features;
        echo '<br>';
        echo '<br>';

        // $images = $input['images'];
        // var_dump($images);


        echo ( constant('INSERT_INTO_PROPERTIES') . ' VALUES(\''
            . uniqid() . '\', \''
            . $input['submit-title'] . '\', \''
            . $input['submit-description'] . '\', \''
            . $input['submit-address'] . '\', \''
            . $input['submit-city'] . '\', \''
            . $input['submit-province'] . '\', \''
            . $input['submit-property-type'] . '\', \''
            . $input['image'] . '\', \''
            . $features . '\', \''
            . $input['submit-rooms'] . '\', \''
            . $input['submit-baths'] . '\', \''
            . $input['submit-distance-to-school'] . '\', \''
            . $input['submit-walk-to-bus'] . '\', \''
            . date("Y-m-d H:i:s") . '\', \''
            . date("Y-m-d H:i:s") . '\', \''
            . date("Y-m-d H:i:s") . '\')'
            );

        // echo "<hr>";

        var_dump($input);
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
