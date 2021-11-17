<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientsController;
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
Route::get('/', 'App\Http\Controllers\ClientsController@create');
Route::resource('client', ClientsController::class);
// Route::resource('doctor', 'User\DoctorsController');

