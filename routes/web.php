<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::controller(DashboardController::class)->group(function(){
    Route::get('/client', 'index')->middleware('auth');
    Route::get('/client/create', 'create')->middleware('auth');
    Route::post('/client/create', 'store')->middleware('auth');
    Route::delete('/client/{clientId}', 'destroy')->middleware('auth');
});

Route::get('/login', function () {
    return view('welcome');
})->name('login')->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/', function () {
    return Redirect('login');
});
    
Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);
