<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UgyfelCrud;

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

Route::get('/ugyfelek', [UgyfelCrud::class, 'render']) -> name('ugyfelek.render');
Route::delete('/ugyfelek/{ugyfel}', [UgyfelCrud::class, 'destroy']) -> name('ugyfelek.destroy');

Route::get('/ugyfelek/{ugyfel}/szemelyek', [UgyfelCrud::class, 'getszemelyek']) -> name('ugyfelek.getszemelyek');