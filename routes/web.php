<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\ForgotpasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/2', function () {
//     return view('login2');
// });
// Route::get('login',[HrmsController::class,"login"]);
// Route::get('login2',[HrmsController::class,"login2"]);
// Route::get('register',[HrmsController::class,"register"]);

// // Route::post('insertdata',[HrmsController::class,"adduser"]);

// // Route::get('loginuser',[HrmsController::class,"loginuser"]);

// Route::get('400',[HrmsController::class,"error"]);
// Route::get('buttons',[HrmsController::class,"buttons"]);
// Route::get('403',[HrmsController::class,"error_three"]);
// Route::get('404',[HrmsController::class,"error_four"]);
// Route::get('500',[HrmsController::class,"error_fivehundred"]);
// Route::get('503',[HrmsController::class,"error_fivethree"]);
// Route::get('animation',[HrmsController::class,"animation"]);
//  Route::get('weather',[HrmsController::class,"weather"]);
// Route::get('typography',[HrmsController::class,"typography"]);
// Route::get('timeline',[HrmsController::class,"timeline"]);

// Route::get('/dashboard', function () {
//     return view('auth.dashboard');
// });


         Route::get('/', function () {
             return view('welcome');
         });

        //  Route::get('/resetpassword', function () {
        //     return view('auth.resetpassword');
        // });



        Route::get('register',[RegisterController::class,"show"]);

        Route::post('register',[RegisterController::class,"register"]);

        Route::get('login',[LoginController::class,"show"]);

        Route::post('dashboard',[LoginController::class,"login"])->name('user');
       
         Route::get('dashboard',[LoginController::class,"dashboard"]);

         Route::get('logout',[LogoutController::class,"perform"]);

         Route::get('forgotpassword',[ForgotpasswordController::class,"forgotPassword"])->name('forgotpassword');

         Route::post('forgotPasswordValidate',[ForgotpasswordController::class,'forgotPasswordValidate'])->name('forgotPasswordValidate');




//route for opening reset page after getting link in mail

         Route::get('/resetpassword/{token}',[ForgotpasswordController::class,"resetpassword"])->name('resetpassword');
         
//route to reset password------------------------------------------------

            Route::post('reset',[ForgotpasswordController::class,"submitresetpassword"])->name('submit');

    //route to view change password page

    Route::get('changepassword',[ForgotpasswordController::class,"changepassword"]);
    
    Route::POST('changepassword',[ForgotpasswordController::class,"submitchangepassword"])->name('change');
    

    Route::get('userprofile',[ForgotpasswordController::class,"userprofile"]);

    Route::post('userprofile',[ForgotpasswordController::class,"profileUpdate"])->name('update');
