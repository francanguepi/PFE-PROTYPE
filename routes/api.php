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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('insertTassetsAisClient', 'TassetsAisClient\TassetsAisClientController@insertTassetsAisClient');
Route::get('checkClient', 'Clientsva\ClientsvaController@checkClient');
Route::get('getTassetsAisClient/{codeClient}', 'TassetsAisClient\TassetsAisClientController@getTassetsAisClient');
Route::get('tassetsAisClientList/{codeClient}', 'TassetsAisClient\TassetsAisClientController@getListTassetsAisClient');
Route::patch('tassetAisClientUpdate/', 'TassetsAisClient\TassetsAisClientController@updatetassetsAisClient');
Route::post('ais', 'Ais\AisController@aisSave');
//Route::get('tassetAisClient/{codeClient}', 'TassetsAisClient\TassetsAisClientController@getTassetsAisClient');

