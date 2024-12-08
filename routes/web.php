<?php

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

Route::get('/', [\App\Http\Controllers\PageController::class,'index']);
Route::get('/job', [\App\Http\Controllers\PageController::class,'job']);
Route::get('/job/{id}', [\App\Http\Controllers\PageController::class, 'jobdetail']);
Route::get('/about', [\App\Http\Controllers\PageController::class,'about']);

Route::group(['prefix' => 'employer'], function() {
    Route::resource('job',\App\Http\Controllers\JobController::class);
    Route::get('/', [\App\Http\Controllers\JobController::class,'index']);
    Route::get('/candidatelist', [\App\Http\Controllers\EmployerController::class,'candidatelist']);
    Route::get('/about', [\App\Http\Controllers\EmployerController::class,'about']);
    Route::get('/profile', [\App\Http\Controllers\EmployerController::class,'profile']);
});