<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\KotelezettsegCrud;

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

Route::get('/kotelezettsegek', KotelezettsegCrud::class) -> name('kotelezettseg');
Route::get('/kotelezettsegek/{esemeny}', KotelezettsegCrud::class, 'destroy') -> name('kotelezettseg.destroy');