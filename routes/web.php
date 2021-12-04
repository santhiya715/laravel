<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

use App\Http\Controllers\ArticuleController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('articules',[ArticuleController::class,'index']);
Route::post('articules','ArticuleController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('articules','ArticuleController@update');


Route::get('/emails', [EventController::class, 'index']);