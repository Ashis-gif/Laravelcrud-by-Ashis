<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;






Auth::routes();

Route::get('/',[PostController::class,'index'])->name('index');
Route::get('/create',[PostController::class,'create'])->name('create');
Route::post('/create',[PostController::class,'save'])->name('save');
Route::get('/edit/{id}',[PostController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[PostController::class,'update'])->name('update');
Route::get('/delete/{id}',[PostController::class,'delete'])->name('delete');

Route::get('/home',[HomeController::class, 'index'])->name('home');
