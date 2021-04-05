<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\DemoEmail;

class MailController extends Controller
{
    public function send()
    {
    	$data = array('name'=>"Yerkebulan Bolatov", 'body' => "Test mail");
     
		Mail::send('mails.demo', $data, function($message) {
   			$message->to('erkebulanbolatov18@gmail.com', 'Yerkebulan Bolatov')
            		->subject('Test Email');
    		$message->from('yerkebulanbolatov18@gmail.com','Yerkebulan Bolatov');
		});
		echo "Email Sent. Check your inbox";
    }
}
