<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $info = "testo vario";

    return view('home', compact("info"));
})->name("home");

Route::get("/cart", function () {
    return view("cart");
})->name("cart");


Route::get("/profile", function () {
    return view("profile");
})->name("profile");
