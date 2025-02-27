<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Usercontroller extends Controller
{
    //
    function getUser(){
        //return "this is Cervanter Gerryson";
        return view('user');
    }
    function aboutUser($name){
        
            //return "hello, This is " .$name;
            return view ('about2',['name'=>$name]);
    }
    function adminLogin(){
        
        
        return view ('admin.login');
}


//EPISODE10
function userAbout($user){
    return view ('userAbout',['user'=>$user]);
}
//nested
function userLogin(){
    if(View::exists('user.userLogin'))
    {
        return view ('user.userlogin');
    }else {
        return "VIEW NOT FOUND";
    }
}
//EPISODE11
function randomUser(){
    $Ruser="Gerryson";
    $Rusers=['Peter','Irvin','Keth','Gerryson'];
    return view ('randomUser',['Ruser'=>$Ruser,'Rusers'=>$Rusers]);
}

//EPISODE 12
function home(){
    //return "this is Cervanter Gerryson";
    return view('home');
}
function about12(){
    //return "this is Cervanter Gerryson";
    return view('about12');
}
//EPISODE 13
function home1(){
    //return "this is Cervanter Gerryson";
    return view('home1');
}
function userfromcall(Request $request){
    echo "Add user function called";
    echo  "<br>";
    echo $request->username;
    echo  "<br>";
    echo $request->email;
    echo  "<br>";
    echo $request->contact;
    echo  "<br>";
    echo $request->skill;
    echo  "<br>";
    echo $request->gender;
    echo  "<br>";
    echo $request->age;
    echo  "<br>";
    echo $request->city;
    
}



}

