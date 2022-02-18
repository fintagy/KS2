<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FelhasznaloCrud;

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

Route::get('/felhasznalok', FelhasznaloCrud::class) -> name('felhasznalok');
Route::delete('/felhasznalok/{felhasznalo}', [FelhasznaloCrud::class, 'destroy']) -> name('felhasznalok.destroy');
