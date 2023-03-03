<?php

use App\Http\Controllers\DataCetakController;
use App\Http\Controllers\DataGajiController;
use App\Http\Controllers\DataHukdisController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\DataKgbController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\DataKeluarga;

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
    Route::patch('/data-cetak/{DataCetak}', 'updateDataCetak')->middleware('client');
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

// Data Gaji API
Route::controller(DataGajiController::class)->group(function(){
    Route::get('/data-gaji', 'getDataGaji')->middleware('client');
    Route::get('/data-gaji/count', 'countDataGaji')->middleware('client');
    Route::get('/data-gaji/{nip}/{thn}', 'getGaji')->middleware('client');
    Route::get('/data-gaji/{nip}/{thn}/{bln}', 'getDetailGaji')->middleware('client');
    Route::get('/data-gaji/find', 'getDataGaji')->middleware('client');
    Route::get('/data-gaji/get-tahun/{nip}', 'getTahun')->middleware('client');

    Route::post('data-gaji', 'create')->middleware('client');
    Route::patch('data-gaji/{DataGaji}', 'update')->middleware('client');
    Route::delete('data-gaji/{DataGaji}', 'delete')->middleware('client');
});

//Data Hukdis API
Route::controller(DataHukdisController::class)->group(function(){
    Route::get('/data-hukdis/count', 'count')->middleware('client');
    Route::get('/data-hukdis', 'getDataHukdis')->middleware('client');
    Route::get('/data-hukdis/{nip}', 'getHukdis')->middleware('client');
    Route::get('/data-hukdis/find', 'findDataHukdis')->middleware('client');
    Route::post('/data-hukdis', 'create')->middleware('client');
    Route::patch('/data-hukdis/{dataHukdis}', 'update')->middleware('client');
    Route::delete('/data-hukdis/{dataHukdis}', 'delete')->middleware('client');
});

// Data Keluarga API
Route::controller(DataKeluargaController::class)->group(function(){
    Route::get('data-keluarga/count', 'count')->middleware('client');
    Route::get('data-keluarga', 'getDataKeluarga')->middleware('client');
    Route::get('data-keluarga/find', 'findDataKeluarga')->middleware('client');
    Route::get('data-keluarga/{nip}', 'getKeluarga')->middleware('client');
    Route::post('data-keluarga', 'create')->middleware('client');
    Route::patch('data-keluarga/{dataKeluarga}', 'update')->middleware('client');
    Route::delete('data-keluarga/{dataKeluarga}', 'delete')->middleware('client');
});

// Data KGB API
Route::controller(DataKgbController::class)->group(function(){
    Route::get('data-kgb/count', 'count')->middleware('client');
    Route::get('data-kgb', 'getDataKgb')->middleware('client');
    Route::get('data-kgb/find', 'findDataKgb')->middleware('client');
    Route::get('data-kgb/{nip}', 'getKgb')->middleware('client');
    Route::post('data-kgb', 'create')->middleware('client');
    Route::patch('data-kgb/{dataKgb}', 'update')->middleware('client');
    Route::delete('data-kgb/{dataKgb}', 'delete')->middleware('client');
});