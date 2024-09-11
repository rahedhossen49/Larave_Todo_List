<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;




Route::view('/','Home')->name('todo.form');
Route::get('/todos',[TodoController::class,'todos'])->name('todo.all');


Route::post('/store',[TodoController::class,'TodoStore'])->name('todo.store');
