<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediController;
use App\Http\Controllers\FileController;

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
Route::post('/addmedia',[App\Http\Controllers\FileController::class , 'addmedia'])->name('addmedia')->middleware('auth');
Route::get('/addmedia',[App\Http\Controllers\FileController::class , 'create']);
Route::resource('files', MediController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('medi-import-export', [MediController::class, 'mediImportExport']);
Route::get('medi-export', [MediController::class, 'mediExport'])->name('medi-export');

Route::post('medi-import', [MediController::class, 'mediImport'])->name('medi-import');
Route::resource('medis', MediController::class);
