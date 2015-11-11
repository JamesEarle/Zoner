<?php

namespace App\Http\Controllers;

use Hash;
use DB;
use Auth;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function __construct() {
        // All constant("QUERY_NAME") are defined here. Gives global access and cleaner DB calls.
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
        $isLandlord = $input['account-type'] == 'landlord';
        $email = $input['form-create-account-email'];
        $password = $input['form-create-account-password'];

        $constraintCheck = DB::select(constant('USER_BY_EMAIL') . "'$email'");

        // Here we verify the validity of the insertion, checking for unique emails
        if(count($constraintCheck) > 0) {
            return redirect('create')->with('message', 'email-in-use');
        }

        // or checking for confirmed passwords. Either will return a session message. 
        if($input['form-create-account-password'] != $input['form-create-account-confirm-password']) {
            return redirect('create')->with('message', 'confirm');
        }

        DB::insert(
                constant('INSERT_INTO_USERS') . 'VALUES (\''
                . uniqid() .'\', \''
                . $input['form-create-account-full-name'] . '\', \''
                . $input['form-create-account-email'] . '\', \''
                . Hash::make($input['form-create-account-password']) . '\', \''
                . $isLandlord . '\', \''
                . date("Y-m-d H:i:s") . '\', \''
                . date("Y-m-d H:i:s") . '\')'
            );  

        if(Auth::attempt(array(
            'email' => $email,
            'password' => $password))) {
            // Successful login
            return redirect('/');
        } else {
            // Failed login for alternate reason.
            return redirect('create')->with('message', 'alt');
        }

    }

    public function doSignin() {

        $input = Request::all();

        $email = $input['form-account-email'];
        $password = $input['form-account-password'];

        $result = DB::select(constant('USER_BY_EMAIL') . "'$email'");

        if(count($result) == 0) {
            return redirect('signin')->with('message', 'not-found');
        }

        if(!Hash::check($password, $result[0]->password)) {
            return redirect('signin')->with('message', 'bad-pass');
        }

        if(Auth::attempt(array(
            'email' => $email,
            'password' => $password))) {
            // Successful login
            return redirect('/');
        } else {
            // Failed login for alternate reason.
            return redirect('signin')->with('message', 'alt');
        }
    }

    public function doLogout() {
        Auth::logout();
        return redirect('/');
    }

    public function createacc() {
        return view('auth.create');
    }

    public function signin() {
        return view('auth.signin');
    }
}
