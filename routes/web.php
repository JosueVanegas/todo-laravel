<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/note/dashboard', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/{id}', [NoteController::class, 'getOne'])->name('note.getOne');
