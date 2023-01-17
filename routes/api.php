<?php

use App\Http\Controllers\DataCetakController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::post('/register', [UserController::class, 'register']);

// Data Cetak API
Route::controller(DataCetakController::class)->group(function(){
    Route::get('/data-cetak/count', 'countDataCetak')->middleware('client');
    Route::get('/data-cetak', 'getDataCetak')->middleware('client');
    Route::get('/data-cetak/find', 'findDataCetak')->middleware('client');
    Route::post('/data-cetak', 'createDataCetak')->middleware('client');
    Route::post('/data-cetak/{DataCetak}', 'updateDataCetak')->middleware('client');
    Route::delete('/data-cetak/{DataCetak}', 'deleteDataCetak')->middleware('client');

    Route::get('/data-cetak/asal/get-tahun/{nip}', 'getTahunAsal')->middleware('client');
    Route::get('/data-cetak/asal', 'getCetakAsal')->middleware('client');
    Route::get('/data-cetak/asal/find', 'findCetakAsal')->middleware('client');
    Route::get('/data-cetak/asal/count', 'countCetakAsal')->middleware('client');

    Route::get('/data-cetak/tujuan/get-tahun/{nip}', 'getTahunTujuan')->middleware('client');
    Route::get('/data-cetak/tujuan', 'getCetakTujuan')->middleware('client');
    Route::get('/data-cetak/tujuan/find', 'findCetakTujuan')->middleware('client');
    Route::get('/data-cetak/tujuan/count', 'countCetakTujuan')->middleware('client');

    Route::get('/data-cetak/riwayat/get-tahun/{nip}', 'getTahunRiwayat')->middleware('client');
    Route::get('/data-cetak/riwayat', 'getCetakRiwayat')->middleware('client');
    Route::get('/data-cetak/riwayat/find', 'findCetakRiwayat')->middleware('client');
    Route::get('/data-cetak/riwayat/count', 'countCetakRiwayat')->middleware('client');

});