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
    	// var_dump($input);
    	//TODO: Finish and test with Mail::send('emails.contact', 'key' => 'value', function() {//give parameters here. })
    	// echo $input['form-contact-name'];

    	Mail::send('emails.contact', 
    		['name'  => $input['form-contact-name'], 
    		 'email' => $input['form-contact-email'], 
    		 'body'  => $input['form-contact-message'],
             'footer'=> "Copyright &copy; 2015. Cross Border Housing Inc. All Rights Reserved."],
    		 function($message) use($input) {
    		 	$message->from($input['form-contact-email'], $input['form-contact-name']);
    		 	$message->cc('j_earle@hotmail.com', 'James Earle');
    		 	$message->to('requests@cbhousing.ca', 'Cross Border Housing Inc.');
    		 	$message->subject('Question From: ' . $input['form-contact-name']);
    		 });

    	return redirect('/');
    }
}
