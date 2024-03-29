<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function dashboard()
    {
        //dd(Auth::check());
        if (Auth::check()) {
            return view('auth.dashboard');
        } else {
            return view('auth.login');
        }
    }


    //admin dashboard

    public function admindashboard(){
        return view('auth.admin-dashboard');
    }

    public function show()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {

        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials))
        
            return redirect()->to('login')
                ->with('error', 'invalid data');
        else {
            // return view('auth.dashboard')
            // ->with('success','Login successfully');
            return redirect()->to('dashboard')->with('success', 'Success! Login Successfull');
        }
    }
}
?>
                        