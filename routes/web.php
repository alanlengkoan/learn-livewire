<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowOneController;
use App\Http\Controllers\ShowTwoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/data', [DataController::class, 'index'])->name('data');
Route::get('/show_one', [ShowOneController::class, 'index'])->name('show_one');
Route::get('/show_two', [ShowTwoController::class, 'index'])->name('show_two');