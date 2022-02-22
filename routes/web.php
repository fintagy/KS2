<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EsemenyCardCrud;

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

Route::middleware(['auth'])->group(function () {
    
    require __DIR__.'/esemeny.php';
    require __DIR__.'/esemenycard.php';
    require __DIR__.'/ugyfel.php';
    require __DIR__.'/szemely.php';
    require __DIR__.'/kotelezettseg.php';
    require __DIR__.'/hatarnap.php';
    require __DIR__.'/felhasznalo.php';
    require __DIR__.'/cim.php';
    require __DIR__.'/ucsoport.php';
    require __DIR__.'/kottip.php';
    require __DIR__.'/kothat.php';

    Route::get('/', EsemenyCardCrud::class);   
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');