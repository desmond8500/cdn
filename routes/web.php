<?php

use App\Http\Controllers\CDNController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::get('kit', [CDNController::class, 'kit'])->name('user');
