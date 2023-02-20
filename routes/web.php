<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrmsController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/2', function () {
//     return view('login2');
// });
Route::get('login',[HrmsController::class,"login"]);
Route::get('login2',[HrmsController::class,"login2"]);
Route::get('register',[HrmsController::class,"register"]);
Route::get('400',[HrmsController::class,"error"]);
Route::get('buttons',[HrmsController::class,"buttons"]);
Route::get('403',[HrmsController::class,"error_three"]);
Route::get('404',[HrmsController::class,"error_four"]);
Route::get('500',[HrmsController::class,"error_fivehundred"]);
Route::get('503',[HrmsController::class,"error_fivethree"]);
Route::get('animation',[HrmsController::class,"animation"]);

// Route::get('/r', function () {
//     return view('register');
// });