<?php

namespace App\Http\Controllers;

use Mail;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {
        return view('about');
    }

    public function welcome() {
        return view('welcome');
    }

    public function contact() {
        return view('contact');
    }

    public function mail() {

    	$input = Request::all();
    	var_dump($input);

    	//TODO: Finish and test with Mail::send('emails.contact', 'key' => 'value', function() {//give parameters here. })
    	echo $input['form-contact-name'];

    	return view('contact');
    }
}
