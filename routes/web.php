<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataHandleController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [AccountController::class, 'showLogin']);
Route::post('/login', [AccountController::class, 'postLogin'])->name('auth.login');
Route::get('/register', [AccountController::class, 'showRegister']);
Route::post('/register', [AccountController::class, 'register']);
Route::get('/dashboard', [DashboardController::class, 'showDashboard']);



Route::get('/data-handle/{id}/path', [DataHandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string', [DataHandleController::class, 'handleQueryString']);
Route::get('/data-handle/form', [DataHandleController::class, 'returnForm']);
Route::post('/data-handle/form', [DataHandleController::class, 'processForm']);


Route::get('/form', [DataHandleController::class, 'layout']);



