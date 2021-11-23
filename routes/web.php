<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', 'App\Http\Controllers\Auth\LoginController@loginU');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('client', ClientsController::class);
    Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('/home', [App\Http\Controllers\ClientsController::class, 'create'])->name('home');
    Route::get('/getAllClients', [App\Http\Controllers\ClientsController::class, 'getAllClients'])->name('getAllClients');
});
