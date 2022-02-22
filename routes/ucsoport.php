<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UcsoportCrud;

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

Route::get('/ucsoportok', UcsoportCrud::class) -> name('ucsoportok');
Route::get('/ucsoportok/{ucsoport}/edit', [UcsoportCrud::class, 'edit']) -> name('ucsoportok.edit');
Route::delete('/ucsoportok/{ucsoport}', [UcsoportCrud::class, 'delete']) -> name('ucsoportok.delete');