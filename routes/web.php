<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/switch-lang/{lang}', [LanguageController::class, 'switchLang'])->name('switchLang');
