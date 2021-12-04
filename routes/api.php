<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;


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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {
    Route::resource('products', ProductController::class);
});

Route::get('articules', 'ArticuleController@index');
Route::group(['prefix' => 'articules'], function () {
    Route::post('add', 'ArticuleController@add');
    Route::get('edit/{id}', 'ArticuleController@edit');
    Route::post('update/{id}', 'ArticuleController@update');
    Route::delete('delete/{id}', 'ArticuleController@delete');
});