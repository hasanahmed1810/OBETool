<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SemesterController;

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

Route::get('/upload/{id}', [UploadController::class, 'index']);

Route::post('/upload/{id}', [UploadController::class, 'upload']);

// Route::Resource('/semesters', SemesterController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [SemesterController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('/add-semester', [SemesterController::class, 'store']);

Route::get('/delete-semester/{id}', [SemesterController::class, 'destroy']);


require __DIR__.'/auth.php';