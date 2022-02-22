<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Kotelezettseg\KottipCrud;

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

Route::get('/kottipusok', KottipCrud::class) -> name('kottipusok');
Route::delete('/kottipusok/{esemeny}', KottipCrud::class, 'delete') -> name('kottipusok.delete');
