<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
    	$posts = Post::all();
    	return view('blog.index') -> with(['posts' => $posts]);
    }

    public function store(Request $request) {
    	Post::create([
    		'Title' => $request->Title,
    		'Body' => $request->Body
    	]);

    	return back();
    }
}
