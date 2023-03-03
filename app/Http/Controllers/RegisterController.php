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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',             // must be at least 8 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            // 'password' => 'required|min:8',
            'cpassword' => 'required|same:password'
        ]);

        $user = User::create($request->all());

        auth()->login($user);

        // return redirect('login')->with('success', "Account successfully registered.");
        return redirect('login')->with('success', 'Success! User created');
    }
}
