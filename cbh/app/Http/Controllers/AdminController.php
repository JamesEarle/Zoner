<?php

namespace App\Http\Controllers;

use Hash;
use DB;
use Auth;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
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
    public function store(Request $request)
    {
        //
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

    public function main() {
        return view('admin.main');
    }

    public function login() {

        $trusted = array(
            'alex@cbhousing.ca',
            'cody@cbhousing.ca',
            'j_earle@hotmail.com'
        );

        if(Auth::check() && in_array(Auth::user()->email, $trusted)) {
            return redirect('/main');
        }

        return view('admin.admin');
    }

    public function doLogin() {
        $trusted = array(
            'alex@cbhousing.ca',
            'cody@cbhousing.ca',
            'j_earle@hotmail.com'
        );

        $input = Request::all();

        $email = $input['form-admin-email'];
        $password = $input['form-admin-password'];

        if(in_array($email, $trusted)) {

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
                return redirect('main');
            } else {
                // Failed login for alternate reason.
                return redirect('signin')->with('message', 'alt');
            }

        } else {
            return redirect('/');
        }

    }
}
