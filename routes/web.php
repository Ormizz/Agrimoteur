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
    return view('folder.index');
});

//SPATB41 Crud
Route::get('/SPAIN41', \App\Http\Livewire\SPAIN41\Index::class)->name('SPAIN41List');
Route::get('/SPAIN41/create', \App\Http\Livewire\SPAIN41\Create::class)->name('SPAIN41Create');
Route::get('/SPAIN41/edit/{idSexe}', \App\Http\Livewire\SPAIN41\Edit::class)->name('SPAIN41Edit');

//SPATB43 Crud
Route::get('/SPAIN43', \App\Http\Livewire\SPAIN43\Index::class)->name('SPAIN43List');
Route::get('/SPAIN43/create', \App\Http\Livewire\SPAIN43\Create::class)->name('SPAIN43Create');
Route::get('/SPAIN43/edit/{typeuserid}', \App\Http\Livewire\SPAIN43\Edit::class)->name('SPAIN43Edit');

//SPATB40 Crud
Route::get('/SPATB40', \App\Http\Livewire\SPATB40\Index::class)->name('SPAIN40List');
Route::get('/SPATB40/create', \App\Http\Livewire\SPATB40\Create::class)->name('SPAIN40Create');
Route::get('/SPATB40/edit/{personnelid}', \App\Http\Livewire\SPATB40\Edit::class)->name('SPAIN40Edit');

//SPATB36 Crud
Route::get('/SPATB36', \App\Http\Livewire\SPATB36\Index::class)->name('SPAIN36List');
Route::get('/SPATB36/create', \App\Http\Livewire\SPATB36\Create::class)->name('SPAIN36Create');
Route::get('/SPATB36/edit/{Navireid}', \App\Http\Livewire\SPATB36\Edit::class)->name('SPAIN36Edit');

//SPATB44 Crud
Route::get('/SPATB44', \App\Http\Livewire\SPATB44\Index::class)->name('SPAIN44List');
Route::get('/SPATB44/create', \App\Http\Livewire\SPATB44\Create::class)->name('SPAIN44Create');
Route::get('/SPATB44/edit/{fonctionid}', \App\Http\Livewire\SPATB44\Edit::class)->name('SPAIN44Edit');
