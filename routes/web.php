<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\EmployeeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');
Route::apiResource('/employee', 'App\Http\Controllers\EmployeeController')->middleware('auth:api');


/*
Route::group([
    'as' => 'passport.',
    'prefix' => config('passport.path', 'oauth'),
    'namespace' => 'Laravel\Passport\Http\Controllers',
], function () {
   Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');
Route::apiResource('/employee', 'App\Http\Controllers\EmployeeController')->middleware('auth:api');

});*/