<?php

use App\Http\Controllers\workoutController;
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



Route::view('/', 'pages.welcome');
Route::view('/totalData', 'pages.totalData');
Route::post('/save', [workoutController::class, 'save'])-> name('save');
