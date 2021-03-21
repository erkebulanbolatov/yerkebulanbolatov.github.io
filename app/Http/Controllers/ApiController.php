<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    public function index(Request $request) {
    	$posts = Post::all();

    	return response($posts, 200);
    }

    public function get_posts(Request $request) {
    	$posts = Post::find($request->id);

    	if($posts == null) {
    		return response(['message' => 'There is no post', 404]);
    	}

    	return response($posts, 200);
    }
}
