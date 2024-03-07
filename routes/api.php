<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\EmployeeController;


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




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
//Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');

Route::apiResource('/employee', 'App\Http\Controllers\EmployeeController@store')->middleware('auth:api','throttle:5,2');


Route::post('login', ['before' => 'throttle:5,2', 'uses' => 'App\Http\Controllers\Auth\UserAuthController@login']);


/*Route::group([
    'as' => 'passport.',
    'prefix' => config('passport.path', 'oauth'),
    'namespace' => 'Laravel\Passport\Http\Controllers',
], function () {
   Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');
Route::apiResource('/employee', 'App\Http\Controllers\EmployeeController@store')->middleware('auth:api');

});*/