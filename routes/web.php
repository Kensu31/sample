<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);
Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware('auth');
Route::get('/insertemployee', function () {
    return view('user.insertemployee');
})->middleware('auth');
Route::get('/updateemployee', function () {
    return view('user.update');
})->middleware('auth');
Route::get('/viewemployee', [EmployeeController::class, 'show'])->middleware('auth');


Route::post('/store', [UserController::class, 'store']);
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/insertrecord', [EmployeeController::class, 'store']);
Route::post('/update/show', [EmployeeController::class, 'search']);