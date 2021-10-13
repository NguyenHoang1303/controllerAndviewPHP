<?php

use App\Http\Controllers\DataHandleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExampleAdminController;
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

//  Example Table, Form, Dashboard
Route::prefix('admin')->group(function(){
    Route::get('/', [ExampleAdminController::class, 'getDashboard'])->name('dashboard');
    Route::get('/form', [ExampleAdminController::class, 'getForm'])->name('form');
    Route::get('/table', [ExampleAdminController::class, 'getTable'])->name('table');
});

//==========================================================================================================

Route::get('/data-handle/{id}/path', [DataHandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string', [DataHandleController::class, 'handleQueryString']);
Route::get('/data-handle/form', [DataHandleController::class, 'returnForm']);
Route::post('/data-handle/form', [DataHandleController::class, 'processForm']);



Route::prefix('/admin/event')->group(function (){
    Route::get('/',[EventController::class,'getEvents'])->name('events');
    Route::get('/creat',[EventController::class,'getForm'])->name('formEvents');
    Route::post('/creat',[EventController::class,'save'])->name('createEvent');
    Route::get('/update/{id}',[EventController::class,'getInformationUpdate'])->name('InformationUpdate');
    Route::post('/update',[EventController::class,'update'])->name('updateEvent');
    Route::get('/delete/{id}',[EventController::class,'delete'])->name('deleteEvent');
    Route::get('/search/name',[EventController::class,'searchByName'])->name('searchByName');
});

