<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//SPATB41 Crud
Route::get('/SPAIN41', \App\Http\Livewire\SPAIN41\Index::class)->name('SPAIN41List');
Route::get('/SPAIN41/create', \App\Http\Livewire\SPAIN41\Create::class)->name('SPAIN41Create');
Route::get('/SPAIN41/edit/{idSexe}', \App\Http\Livewire\SPAIN41\Edit::class)->name('SPAIN41Edit');

//SPATB43 Crud
Route::get('/SPAIN43', \App\Http\Livewire\SPAIN43\Index::class)->name('SPAIN43List');
Route::get('/SPAIN43/create', \App\Http\Livewire\SPAIN43\Create::class)->name('SPAIN43Create');
Route::get('/SPAIN43/edit/{typeuserid}', \App\Http\Livewire\SPAIN43\Edit::class)->name('SPAIN43Edit');
