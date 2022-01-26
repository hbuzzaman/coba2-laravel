<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Robbana dholamna Anfusana wa inlm taghfir lana wa tarhamna lanakunanna minal khasirin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
    // return "Halaman HOME";
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "hilmy",
        "email" => "hlmy@dasd",
        "image" => "FIX.PNG"
    ]);
    // return "Halaman ABOUT";
});
// route get post banyak
Route::get('/posts', [PostController::class, 'index']);
// halaman single post memanggil fungsi show pada controller PostController
Route::get('posts/{slug}', [PostController::class, 'show']);
// Route::get('posts/{slug}', [PostController::class, 'show']);