<?php

use App\Http\Controllers\DecisionAreaController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DecisionAreaController::class, 'index'])->name('homepage');

Route::resource('note', NoteController::class);

Route::resource('decisionArea', DecisionAreaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
