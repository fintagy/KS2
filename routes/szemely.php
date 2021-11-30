<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/szemelyek', [SzemelyCrud::class, 'render']) -> name('szemelyek.render');
Route::get('/szemelyek/create', [SzemelyCrud::class, 'create']) -> name('szemelyek.create');
Route::get('/szemelyek/{ugyfel}', [SzemelyCrud::class, 'getszemelyek']) -> name('szemelyek.getszemelyek');

Route::delete('/szemelyek/{szemely}', [SzemelyCrud::class, 'destroy']) -> name('szemelyek.destroy');
