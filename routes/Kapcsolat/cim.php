<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CimCrud;

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

Route::get('/cimek', CimCrud::class) -> name('cimek');
Route::delete('/cimek/{cim}', [CimCrud::class, 'delete']) -> name('cimek.delete');
