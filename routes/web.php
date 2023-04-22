<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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


Route::get("/calc/{val1}/{val2}",[DemoController::class,'calc']);
Route::get('/calculations/multiply', [DemoController::class, 'calculation'])->name('multiply');

Route::redirect('/', '/student');
Route::resource("/student", StudentController::class);