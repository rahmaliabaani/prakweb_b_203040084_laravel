<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rahmalia Nuursyabaani",
        "email" => "203040084@mail.unpas.ac.id",
        "image" => "foto.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);