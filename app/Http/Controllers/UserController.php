<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function mail_send()
    {
    	return view('user');
    }

    public function store(Request $request)
    {
    	$user = new Users();

    	$user->Name = $request->input('Name');
    	$user->Surname = $request->input('Surname');
    	$user->Email = $request->input('Email');
    	
    	if ($request->hasfile('Photo')) {
    		$file = $request->file('Photo');
    		$extension = $file->getClientOriginalExtension();
    		$filename = time() . '.' . $extension;
    		$file->move('uploads/user/', $filename);
    		$user->Photo = $filename;
    	} else {
    		return $request;
    		$user->Photo = '';
    	}

    	$user->save();
    	return view('user')->with('user', $user);
    }
}
