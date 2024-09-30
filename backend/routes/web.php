<?php

use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, "index"])->name("quote.index");
Route::get('idezetek/house', [QuoteController::class, "house"])->name("quote.house");
Route::get('idezetek/modernFamily', [QuoteController::class, "modernFamily"])->name("quote.modernFamily");
Route::get('idezetek/uvegtigris/csoki', [QuoteController::class, "uvegtigrisCsoki"])->name("quote.uvegtigrisCsoki");
Route::get('idezetek/uvegtigris/lali', [QuoteController::class, "uvegtigrisLali"])->name("quote.uvegtigrisLali");