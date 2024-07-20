<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\InvoiceExportController;
use App\Http\Controllers\InvoiceImportController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StatisticalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 1;
});
Route::prefix('admin')->group(function () {

});

