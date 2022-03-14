<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\showcontroller;
use App\Http\Livewire\Datadriver;
use App\Http\Livewire\Kendaraan;
use App\Http\Livewire\Users;
// use App\Http\Livewire\Test;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('Dashboard','App\Http\Controllers\homecontroller@index');
Route::get('/', function () {
    return view('auth.login');
});
// Route::get('test', Test::class);
// Route::get('dashboard', Users::class);
Route::get('datadriver', Datadriver::class);
Route::get('cars', kendaraan::class);
//route ketika sudah fix
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    });
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', Users::class);
    //     return view('dashboard');
    // })->name('dashboard');
