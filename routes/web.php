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

Route::get('/SPATB41', \App\Http\Livewire\SPATB41\Index::class)->name('SPATB41List');
Route::get('/SPATB41/create', \App\Http\Livewire\SPATB41\Create::class)->name('SPATB41Create');
Route::get('/SPATB41/edit/{idSexe}', \App\Http\Livewire\SPATB41\Edit::class)->name('SPATB41Edit');
