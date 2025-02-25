<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
