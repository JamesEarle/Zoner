<?php

namespace App\Http\Controllers;

use Hash;
use DB;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function __construct() {
        include_once(app_path()."\\queries.php");
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
    // public function store(Request $request)
    // {
    //     //
    // }

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

    public function store() {

        $input = Request::all();

        if($input['account-type'] == 'student') {
            
            DB::insert(
                constant('INSERT_INTO_USERS') . 'VALUES (\''
                . uniqid() .'\', \''
                . $input['form-create-account-full-name'] . '\', \''
                . $input['form-create-account-email'] . '\', \''
                . Hash::make($input['form-create-account-password']) . '\', \''
                . date("Y-m-d H:i:s") . '\', \''
                . date("Y-m-d H:i:s") . '\')'
            );  

            session()->flash('message', 'Thanks for signing up! Should you need any support, our best and brightest are available around the clock to help you.');
            session()->flash('title', 'You Rock!');

            return redirect('/');

        } else { //landlord

            DB::insert(
                constant('INSERT_INTO_LANDLORDS') . 'VALUES (\''
                . uniqid() .'\', \''
                . $input['form-create-account-full-name'] . '\', \''
                . $input['form-create-account-email'] . '\', \''
                . Hash::make($input['form-create-account-password']) . '\', \''
                . date("Y-m-d H:i:s") . '\', \''
                . date("Y-m-d H:i:s") . '\')'
            );

            return redirect('/');
        }
    }

    public function createacc() {
        return view('auth.create');
    }

    public function signin() {
        return view('auth.signin');
    }
}
