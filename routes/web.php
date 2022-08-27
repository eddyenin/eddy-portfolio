<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
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
Route::get('/', [ProfileController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/register', [AdminController::class, 'register']);

Route::get('/projects', [ProjectController::class]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');
Route::get('/home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/home/store', [App\Http\Controllers\HomeController::class, 'store']);
