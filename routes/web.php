<?php

use App\Http\Controllers\CompressorController;
use App\Http\Controllers\DryerController;
use App\Http\Controllers\NitrogenController;
use App\Http\Controllers\TangkiController;
use App\Http\Controllers\TimelineController;
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
Route::group(['middleware' => ['auth']], function () {
    Route::view('/', 'dashboard')->name('dashboard');
    Route::view('qrscan', 'qr-scan')->name('qrscan');

    Route::get('timeline', [TimelineController::class, 'index'])->name('timeline');

    Route::get('compressor/{authorize}', [CompressorController::class, 'show'])->name('compressor.show');
    Route::get('dryer/{authorize}', [DryerController::class, 'show'])->name('dryer.show');
    Route::get('nitrogen/{authorize}', [NitrogenController::class, 'show'])->name('nitrogen.show');
    Route::get('tangki/{authorize}', [TangkiController::class, 'show'])->name('tangki.show');
    
    Route::resource('compressor', CompressorController::class)->except('show');
    Route::resource('dryer', DryerController::class)->except('show');
    Route::resource('nitrogen', NitrogenController::class)->except('show');
    Route::resource('tangki', TangkiController::class);    
});

require __DIR__.'/auth.php';
