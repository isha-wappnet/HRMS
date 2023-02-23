<?php

namespace App\Http\Controllers;


use App\Mail\ResetPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ForgotpasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('auth.forgotpassword');
    }

    public function forgotPasswordValidate(Request $req)
    {
        $valid=$req->validate([
            'email'=> 'required|email|exists:users',
        ]);
        // dd($valid);
        $token = Str::random(64);
       
        DB::table('password_resets')->insert([
            'email'=>  $req->email,
            'token'=> $token,
            'created_at'=> Carbon::now()
        

        ]);

        Mail::send('mailforgot',['token'=> $token],function($message) use($req){


            $message->to($req->email);
            $message-> subject('Reset password');
        });
        return back()->with('message','Rest link send to your registered mail address!');
        
    }
    public function resetpassword($token){
        return view ('auth.resetpassword',['token'=>$token]);
    }
}
