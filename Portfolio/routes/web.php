<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\models\Post;

use App\Http\Controllers\PostController;

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

Route::get('post/add', function() {
    DB::table('post')->insert([
        'title' => 'First blog',
        'body' => 'body of first blog'
    ]);
});

Route::get('post', [PostController::class, 'index']);


