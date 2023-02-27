<?php

namespace App\Http\Controllers;


use App\Mail\ResetPassword;
use App\Models\User;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
        $valid =$req->validate([
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
        return back()->with('success','Rest link send to your registered mail address!');
        
    }
    public function resetpassword($token){
        return view('auth.resetpassword',['token'=>$token]);
    }

    //reset password ----------------------------------------------------------------------------------//

    public function submitresetpassword(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password'
        ]);

        $updatepassword = DB::table('password_resets')->where([

            'email'=> $request->email,
            'token'=> $request->token
        ])
        ->first();

        if(! $updatepassword){

            return back()->withInput()->with('error','Reset link is expired!');

        }
            $user  = User::where('email', $request->email)
            ->update(['password'=>Hash::make($request->password)]);

            DB::table('password_resets')->where(['email'=>$request->email])->delete();
            return redirect('login')->with('Success','your password has been successfully changed');
    }
//---------------------------------------------------------------------------------------------------------------------------------------------
      

        public function changepassword(){
            
            return view('auth.changepassword');
        }
        //change password function

        public function submitchangepassword(Request $request){

        //     $validateData=$request->validate([

        //         'currentpassword' => 'required',
        //         'password' =>'required'
        //     ]);


        //   $hashedpassword =Auth::user()->password;
        //     if(Hash::check($request->currentpassword,$hashedpassword)){

        //     $user= User::find(Auth::id());
        //     $user->password = Hash::make($request->input('password'));
        //     $user->save();
        //     Auth::logout();
       
        //     return redirect('login')->with('success','Password Updated Successfully');

        // }
        // else{

        //     return redirect()->back()->with('error','Current Password does not match with Old Password');
        // }

        // }
        $request->validate([
            'currentpassword' => 'required',
            'new_password' => 'required',
        ]);


        #Match The Old Password
        if(!Hash::check($request->currentpassword, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('login')->with('success','Password Updated Successfully');
}




        public function userprofile(){

            return view('auth.userprofile');
        }



        //update profile controller
        public function profileUpdate(Request $request){
            //validation rules
    
            $request->validate([
                'name' =>'required|min:4|string|max:255',
                'email'=>'required|email|string|max:255'
            ]);
            $user =Auth::user();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->save();
            return back()->with('message','Profile Updated');
        }


}
