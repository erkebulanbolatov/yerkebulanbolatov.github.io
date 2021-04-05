<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});

Route::get ('/post/create', function(){
    DB::table('posts')->insert([
        'id' => 58,
        'Title' => 'Better Programming',
        'Body' => 'Better Programming is a Medium publication dedicated to programming. They publish multiple articles every day from multiple authors, all curated and edited to guarantee excellent content and great reads.'
    ]);
});

Route::get('post', function () {
    $post = Post::find(58);
    return $post->Title;
});

Route::get('post', function () {
    $post = Post::find(58);
    return $post->Body;
});

Route::get('posts', [BlogController::class, 'index']);

Route::get('blog/create', function () {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('post/{id}', [BlogController::class, 'get_post']);


Route::get('/user', 'App\Http\Controllers\UserController@mail_send');

Route::post('/addphoto', 'App\Http\Controllers\UserController@store')->name('addphoto');

Route::get('meil/send', 'App\Http\Controllers\MailController@send');