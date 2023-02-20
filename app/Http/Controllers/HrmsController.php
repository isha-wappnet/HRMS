<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrmsController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function login2(){
        return view("auth.login2");
    }
    public function register(){
        return view("auth.register");
    }
    //400 error
    public function error(){
        return view("auth.400");

    }
    public function buttons(){
        return view('auth.buttons');
    }
    //403 error
    public function error_three(){
        return view('auth.403');
    }
    //404 error
    public function error_four(){
        return view('auth.404');
    }
    //error 500
    public function error_fivehundred(){
        return view('auth.500');
    }
    //error 503
    public function error_fivethree(){
        return view('auth.503');
    }
    //animation
    public function animation(){
        return view('auth.animation');
    }
}
