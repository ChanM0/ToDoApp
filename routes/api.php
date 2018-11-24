<?php

use Illuminate\Http\Request;

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

Route::middleware('auth.jwt')->post('/quote', 'QuoteController@postQuote');
Route::middleware('auth.jwt')->get('/quotes', 'QuoteController@getQuotes');
Route::middleware('auth.jwt')->put('/quote/{id}', 'QuoteController@putQuote');
Route::middleware('auth.jwt')->delete('/quote/{id}', 'QuoteController@deleteQuote');


Route::post('/user', 'UserController@signUp');
Route::post('/user/signIn ', 'UserController@signIn');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
