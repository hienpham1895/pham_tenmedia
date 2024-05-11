<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
    return view('home');
});

// Route::get('/jobs', [App\Http\Controllers\JobController::class,'index'])->name('jobs.index');
Route::get('/', [HomeController::class, 'index']);
Route::resource('jobs', JobController::class);
Route::resource('companies', CompanyController::class);
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);