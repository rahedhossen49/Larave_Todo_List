<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;




Route::view('/','Home')->name('todo.form');
Route::get('/todos',[TodoController::class,'todos'])->name('todo.all');


Route::post('/store',[TodoController::class,'TodoStore'])->name('todo.store');

Route::get('/edit/{id}',[TodoController::class,'EditTodo'])->name('todo.edit');

Route::patch('/update/{id}',[TodoController::class,'UpdateTodo'])->name('todo.update');


Route::get('/update-status/{id}',[TodoController::class,'UpdateStatus'])->name('todo.status');

Route::get('/delete/{id}',[TodoController::class,'deleteTodo'])->name('todo.delete');
