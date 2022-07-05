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
    })->name("front.index");

    Route::get("/contact", function () {
        return view("contact");
    })->name("front.contact");

    Route::get("/about", function () {
        return view("about");
    })->name("front.about");

    Route::get("/locale-change/{tlocale}", function () {
    })->name("front.changeLocale");
});

Route::get("/", function () {
    return redirect()->route("front.index", ["locale" => app()->getLocale()]);
});
