<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MollieController;

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

Route::group(['namespace' => 'booking'], function () {
    Route::post('createBooking/', 'BookingController@createBooking');
    Route::get('payment-success/{booking_id}', 'BookingController@paymentSuccess')->name('payment.success');
    // Route::get('getAllDestinaions/', 'BookingController@getDestinations');
});
Route::post('addPrice/', 'PriceController@seedData');
Route::post('getPrice/', 'PriceController@getPrice');


// payment Integration
// Route::get('get-checkout-id/{price}', 'PaymentProviderController@getCheckoutId');
// Route::get('paymentStatus/{resourcePath}/{chekoutId}', 'PaymentProviderController@getCheckoutId');

Route::post('send-message', 'ContactController@sendEmail')->name('contact.send');