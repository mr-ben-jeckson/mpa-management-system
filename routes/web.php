<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\StatisticsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware;
use App\Http\Controllers\Admin\AppController;


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

Route::get('/', [StatisticsController::class, 'index']);
Auth::routes();

Route::group(array('prefix'=>'admin','namespace'=>'Admin','middleware'=>'admin'), function (){
    // Admin Routes
    Route::get('/', [AppController::class, 'home']);
    Route::get('/test', [AppController::class, 'test']);

});
