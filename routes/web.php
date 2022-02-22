<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SubjectController;


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
Route::get('/map-plos/{sem_id}/{id}', [MapController::class, 'index']);

Route::get('/upload/{sem_id}/{id}', [UploadController::class, 'index']);

Route::post('/upload/{sem_id}/{id}', [UploadController::class, 'upload']);

Route::get('/subjects/{id}', [SubjectController::class, 'index']);

Route::get('/data/{sem_id}/{id}', [DataController::class, 'index']);

Route::post('/report/{sem_id}/{id}', [ReportController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [SemesterController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('/add-semester', [SemesterController::class, 'store']);

Route::post('/add-subject/{id}', [SubjectController::class, 'store']);

Route::get('/delete-semester/{id}', [SemesterController::class, 'destroy']);

Route::get('/delete-subject/{sem_id}/{id}', [SubjectController::class, 'destroy']);

Route::get('/download-template', [UploadController::class, 'download']);

require __DIR__.'/auth.php';