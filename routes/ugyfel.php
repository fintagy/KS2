<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UgyfelCrud;
use App\Http\Livewire\SzemelyCrud;

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

Route::get('/ugyfelek', UgyfelCrud::class) -> name('ugyfelek');
Route::get('/ugyfelek/{ugyfel}/edit', [UgyfelCrud::class, 'edit']) -> name('ugyfelek.edit');
Route::delete('/ugyfelek/{ugyfel}', [UgyfelCrud::class, 'destroy']) -> name('ugyfelek.destroy');

//Route::get('/szemelyek', SzemelyCrud::class) -> name('getszemelyek');