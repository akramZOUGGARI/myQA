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

Route::post('/quote',[
	'user'=>'QuoteController@postQuote'
]);

Route::get('/quotes',[
	'user'=>'QuoteController@postQuote'
]);

Route::put('/quote/{id}',[
	'user'=>'QuoteController@postQuote'
]);

Route::delete('/quote/{id}',[
	'user'=>'QuoteController@postQuote'
]);