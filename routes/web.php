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

//SPATB14 Crud
Route::get('/SPAIN14', \App\Http\Livewire\SPAIN14\Index::class)->name('SPAIN14List');
Route::get('/SPAIN14/create', \App\Http\Livewire\SPAIN14\Create::class)->name('SPAIN14Create');
// Route::get('/SPAIN14/edit/{typeuserid}', \App\Http\Livewire\SPAIN14\Edit::class)->name('SPAIN14Edit');

//SPATB15 Crud
Route::get('/SPAIN15', \App\Http\Livewire\SPAIN15\Index::class)->name('SPAIN15List');
Route::get('/SPAIN15/create', \App\Http\Livewire\SPAIN15\Create::class)->name('SPAIN15Create');
Route::get('/SPAIN15/edit{Localisation}', \App\Http\Livewire\SPAIN15\Create::class)->name('SPAIN15Edit');

//SPATB17 Crud
Route::get('/SPAIN17', \App\Http\Livewire\SPAIN17\Index::class)->name('SPAIN17List');
Route::get('/SPAIN17/create', \App\Http\Livewire\SPAIN17\Create::class)->name('SPAIN17Create');
//Route::get('/SPAIN17/edit{Localisation}', \App\Http\Livewire\SPAIN17\Create::class)->name('SPAIN17Edit');

//SPATB20 Crud
Route::get('/SPAIN20', \App\Http\Livewire\SPAIN20\Index::class)->name('SPAIN20List');
Route::get('/SPAIN20/create', \App\Http\Livewire\SPAIN20\Create::class)->name('SPAIN20Create');
//Route::get('/SPAIN20/edit{Localisation}', \App\Http\Livewire\SPAIN20\Create::class)->name('SPAIN20Edit');

//SPATB21 Crud
Route::get('/SPAIN21', \App\Http\Livewire\SPAIN21\Index::class)->name('SPAIN21List');
Route::get('/SPAIN21/create', \App\Http\Livewire\SPAIN21\Create::class)->name('SPAIN21Create');
//Route::get('/SPAIN21/edit{Localisation}', \App\Http\Livewire\SPAIN21\Create::class)->name('SPAIN21Edit');

//SPATB33 Crud
Route::get('/SPAIN33', \App\Http\Livewire\SPAIN33\Index::class)->name('SPAIN33List');
Route::get('/SPAIN33/create', \App\Http\Livewire\SPAIN33\Create::class)->name('SPAIN33Create');
//Route::get('/SPAIN33/edit{Localisation}', \App\Http\Livewire\SPAIN33\Create::class)->name('SPAIN33Edit');

//SPATB34 Crud
Route::get('/SPAIN34', \App\Http\Livewire\SPAIN34\Index::class)->name('SPAIN34List');
Route::get('/SPAIN34/create', \App\Http\Livewire\SPAIN34\Create::class)->name('SPAIN34Create');
//Route::get('/SPAIN34/edit{Localisation}', \App\Http\Livewire\SPAIN34\Create::class)->name('SPAIN34Edit');

//SPATB35 Crud
Route::get('/SPAIN35', \App\Http\Livewire\SPAIN15\Index::class)->name('SPAIN35List');
Route::get('/SPAIN35/create', \App\Http\Livewire\SPAIN15\Create::class)->name('SPAIN35Create');
//Route::get('/SPAIN35/edit{Localisation}', \App\Http\Livewire\SPAIN35\Create::class)->name('SPAIN35Edit');