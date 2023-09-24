<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', [GeneralController::class, 'contact']);
Route::get('/about_us', [GeneralController::class, 'about_us']);
// Route::get('/job_detail/{job}', [JobsController::class, 'job_details']);
Route::get('/job_detail', [JobsController::class, 'job_details']);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/post_job', [JobsController::class, 'post_job']);
    Route::get('/profile', [ProfileController::class, 'index']);

});
