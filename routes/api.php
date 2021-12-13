<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace'=>'booking'],function(){
    Route::post('createBooking/','BookingController@createBooking');
    Route::post('updateItem/','ItemController@updateItem');
    Route::post('createItemPhotos/','ItemController@createItemPhotos');
    Route::post('logout/','VendorController@logout');
    
});
