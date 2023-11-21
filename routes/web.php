<?php

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
    return view('home',["title" => "home"]);
});
Route::get('/home', function () {
    return view('home',["title" => "home"]);
});
Route::get('/keyboard', [\App\Http\Controllers\KeyboardController::class,'index']);
Route::get('/mouse', [\App\Http\Controllers\MouseController::class,'index']);
Route::get('/monitor', [\App\Http\Controllers\MonitorController::class,'index']);


Route::get('/mouse/detail/{mouse}',[\App\Http\Controllers\MouseController::class,'show']);
Route::get('/keyboard/detail/{keyboard}',[\App\Http\Controllers\KeyboardController::class,'show']);
Route::get('/monitor/detail/{monitor}',[\App\Http\Controllers\MonitorController::class,'show']);

