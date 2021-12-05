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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {       
    require __DIR__.'/ugyfel.php';
    require __DIR__.'/szemely.php';
});

Route::view('contacts', 'ugyfel.ugyfel-crud');