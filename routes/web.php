<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Back-End
Route::group(['middleware' => ['verified']], function () {
    
	Route::get('/home', 'HomeController@index')->name('home');
	
	Route::get('/g-c-p', 'CompPCController@index')->name('create-completed-pc');
	Route::get('/g-n', 'NtbookController@index')->name('create-notebook');
	
	// All Part Of PC -> CPU
	Route::get('/g-pfp-cpu', 'PPController@index')->name('create-pfp-cpu');
	Route::get('/g-rec-cpu', 'PPController@getRec_CPU');






// Route::get('/home', 'HomeController@index')->name('home')->middleware('verifiedphone'); 
});


Route::get('/api/services', 'ApiController@index')->name('api.index');


// Twilio verification
Route::get('phone/verify', 'PhoneVerificationController@show')->name('phoneverification.notice');
Route::post('phone/verify', 'PhoneVerificationController@verify')->name('phoneverification.verify');
