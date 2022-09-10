<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/jobs', [JobsController::class, 'index'])->middleware('auth')->name('jobs');

Route::get('/company', [CompanyController::class, 'index'])->middleware('auth')->name('company');
Route::post('/company/save', [CompanyController::class, 'save'])->middleware('auth')->name('company/save');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
