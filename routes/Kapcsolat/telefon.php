<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TelefonCrud;

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

Route::get('/telefonok', TelefonCrud::class) -> name('telefonok');
Route::delete('/telefonok/{telefon}', [TelefonCrud::class, 'delete']) -> name('telefonok.delete');
