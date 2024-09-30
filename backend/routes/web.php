<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, "index"])->name("quote.index");
Route::get('idezetek/house', [QuoteController::class, "house"])->name("quote.house");
Route::get('idezetek/modern-family', [QuoteController::class, "modernFamily"])->name("quote.modernFamily");
Route::get('idezetek/uvegtigris/csoki', [QuoteController::class, "uvegtigrisCsoki"])->name("quote.uvegtigrisCsoki");
Route::get('idezetek/uvegtigris/lali', [QuoteController::class, "uvegtigrisLali"])->name("quote.uvegtigrisLali");
Route::get('idezetek/harry-potter/{slug}', [QuoteController::class, "harryPotter"])->name("quote.harryPotter");
Route::get('naptar/ma', [CalendarController::class, "today"])->name("calendar.today");
Route::get('naptar/tegnap', [CalendarController::class, "yesterday"])->name("calendar.yesterday");
Route::get('naptar/holnap', [CalendarController::class, "tomorrow"])->name("calendar.tomorrow");
Route::get('szamologep/{a}{operator}{b}', [CalculatorController::class, "result"])->name("calculator.result")
    ->where(["a" => "[0-9]+", "b" => "[0-9]+", "operator" => "[\*\+\-\/]"]);