<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/user/user', [UserController::class,'getUser']);
Route::get('/about2/{name}',[UserController::class,'aboutUser']);
Route::get('/admin-login',[UserController::class,'adminLogin']);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/homepage', function () {
    return view('homepage');
});

//Route::view('/home','home');
//Route::redirect('/home','/');

Route::get('/about', function () {
    return view('about');
});
Route::get('/details/{name}', function ($name) {
    return view('details',["name"=>$name]);
});
Route::get('/contact', function () {
    return view('contact');
});

