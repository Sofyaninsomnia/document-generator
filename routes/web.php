<?php

use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DokumenController::class, 'index'])->name('index');
Route::post('/generate-pdf', [PDFController::class, 'generate'])->name('pdf');
Route::post('/dokumen/store', [DokumenController::class, 'store'])->name('dokumen.store');
Route::delete('/dokumen/delete/{id}', [DokumenController::class, 'destroy'])->name('dokumen.destroy');

Route::get('/generate', [GenerateController::class, 'index'])->name('generate');
