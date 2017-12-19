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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group(['namespace' => 'Api'], function () {

    Route::get('/', function() {
        return 'Welcome on API V1';
    });

    $this->get('users/', 'UsersController@index');
    $this->get('users/{user}', 'UsersController@show');
    $this->post('users/{user}/ticket', 'UsersController@send_ticket');
});