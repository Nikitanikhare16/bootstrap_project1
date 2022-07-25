<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;

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
Route::get('/form',function(){
    return view('form');
});
Route::get('/edit',function(){
    return view('edit');
});
Route::post('store',[EntryController::class,'store'])->name('store');
Route::get('table',[EntryController::class,'table'])->name('table');
Route::get('edit/{id}',[EntryController::class,'edit'])->name('edit');
Route::post('update/{id}',[EntryController::class,'update'])->name('update');
Route::get('delete/{id}',[EntryController::class,'delete'])->name('delete');
