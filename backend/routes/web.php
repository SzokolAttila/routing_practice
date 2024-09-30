<?php

use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, "index"])->name("quote.index");
Route::get('idezetek/house', [QuoteController::class, "house"])->name("quote.house");