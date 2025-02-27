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

//EPISODE 10
Route::view('About-user','userAbout');
Route::get('About-user/{user}',[UserController::class,'userAbout']);
//nested
Route::view('user-login','userLogin');
Route::get('user-login',[UserController::class,'userLogin']);

//EPISODE 11
Route::view('RandomUser','randomUser');
Route::get('RandomUser',[UserController::class,'randomUser']);

//EPISODE 12
Route::view('home','home');
Route::get('home',[UserController::class,'home']);
Route::view('about12','about12');
Route::get('about12',[UserController::class,'about12']);

//EPISODE 13
Route::view('home1','home1');
Route::get('home1',[UserController::class,'home1']);

//EPISODE 14 and EPISODE 15
Route::view('user-form','user-form');
Route::post('userfromcall',[UserController::class,'userfromcall']);

// //EPISODE 15
// Route::view('form','form');
// Route::post('form',[UserController::class,'form']);