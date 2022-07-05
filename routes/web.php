<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    "prefix" => "{locale}",
    "middleware" => "setlocale"
], function () {

    Route::get("/", function () {
        return view("welcome");
    })->name("front.front");
});

Route::get("/", function () {
    return redirect()->route("front.front", ["locale" => app()->getLocale()]);
});
