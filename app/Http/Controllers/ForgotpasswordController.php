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
use DataTables;

class ForgotpasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('auth.forgotpassword');
    }

    public function forgotPasswordValidate(Request $req)
    {
        $valid = $req->validate([
            'email' => 'required|email|exists:users',
        ]);
        // dd($valid);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' =>  $req->email,
            'token' => $token,
            'created_at' => Carbon::now()


        ]);


        Mail::send('mailforgot', ['token' => $token], function ($message) use ($req) {


            $message->to($req->email);
            $message->subject('Reset password');
        });
        return back()->with('success', 'Rest link send to your registered mail address!');
    }
    public function resetpassword($token)
    {
        return view('auth.resetpassword', ['token' => $token]);
    }

    //reset password ----------------------------------------------------------------------------------//

    public function submitresetpassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' =>   [
                'required',
                'string',
                'min:8',             // must be at least 8 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'cpassword' => 'required|same:password'
        ]);

        $updatepassword = DB::table('password_resets')->where([

            'email' => $request->email,
            'token' => $request->token
        ])
            ->first();

        if (!$updatepassword) {

            return back()->withInput()->with('error', 'Reset link is expired!');
        }
        $user  = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();
        return redirect('login')->with('Success', 'your password has been successfully changed');
    }
    //---------------------------------------------------------------------------------------------------------------------------------------------


    public function changepassword()
    {

        return view('auth.changepassword');
    }
    //change password function------------------------------------------------------------

    public function submitchangepassword(Request $request)
    {


        $request->validate([
            'currentpassword' => 'required',
            'new_password' => [
                'required',
                'string',
                'min:8',             // must be at least 8 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
        ]);


        #Match The Old Password
        if (!Hash::check($request->currentpassword, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('login')->with('success', 'Password Updated Successfully');
    }

    public function userprofile()
    {

        return view('auth.userprofile');
    }



    //update profile controller------------------------------------------------------------------


    public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message', 'Profile Updated');
    }





    //Delete form datatable----------------------------------------------------------------------



    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = User::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn("action", '<form action="{{route("users.destroy",$id)}}" method="POST">
                @csrf
                @method("DELETE")
                
                    <a  href="{{route("users.edit",$id)}}" title="Edit"  >
                    <i class="fa fa-edit" style="font: size 5px;px;color:green ">Edit</i>
                </a>
                <button type ="submit" id="btn" title="Delete" style="font-size:24px;color:red;background-color:white;border:0px;">
                    <i class="fa fa-trash"  style="font-size:12px;color:red;background-color:white;">Delete</i>
                </button>
                
</form>')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('auth.usertable');
    }
    public function delete($id)
    {

        User::find($id)->delete();
        return back()->with('success', "Data deleted successfully");
    }



    //Edit User from Data-table-------------------------------------



    public function edit($id)
    {
        $user = User::find($id);
        return view('auth.edit', compact('user'));
    }

    public function editprofile(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255'
        ]);
        $user = User::find($request->id);
        $user->update($request->only('name', 'email'));
        // dd($user);
        return redirect()->route('users.index')->withSuccess('sucess', 'User updated successfully.');
    }
}
