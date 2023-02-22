<?php

namespace App\Http\Controllers;
use App\Models\User;
//use App\Http\Requests\RegisterRequest;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function show()
    {
        return view('auth.register');
    }





    public function register(Request $request) 
    {
        $user = $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email:rfc,dns|unique:users,email',
            
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password'
        ]);
        $user = User::create($request->all());

        auth()->login($user);

        return redirect('login')->with('success', "Account successfully registered.");
    }
}
