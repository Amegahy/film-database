<?php

use Illuminate\Support\Facades\Route;

session_start(); // Init a session to store user data

Route::post('/login', function () {
    // This should be checked alongside database to ensure details are valid
    $_SESSION["usr"] = Request::input('username'); 

    return redirect('/'); // Redirect to homepage on success

})->name('login.submit');