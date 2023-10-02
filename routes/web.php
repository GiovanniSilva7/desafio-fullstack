<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Models\LandingData;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/login', 'login');
Route::view('/edit-dashboard', 'edit-dashboard');
Route::view('/dashboard', 'dashboard');
Route::view('/principal', 'principal');



Route::post('/enviar-dados', [DadosController::class, 'enviarDados']);

Route::post('/api/upload', [UploadController::class, 'upload']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/download/{landingData}', function (LandingData $landingData) {
    return Storage::download($landingData->file->path);
})->name('download');

Route::get('/edit-dashboard', [DashboardController::class, 'edit-dashboard'])->name('edit-dashboard');

