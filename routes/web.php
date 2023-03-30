<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::post('/upload', function (Request $request) {
    $result = $request->file('imagen')->storeOnCloudinary('laravel');

    return view('result', [
        'image_path' => $result->getSecurePath(),
    ]);
});

Route::get('/test', function() {
    return view('result', [
        'image_path' => 'https://res.cloudinary.com/dcyar/image/upload/v1680147920/laravel/l6gierufjhd6hvietzy7.jpg',
    ]);
});
