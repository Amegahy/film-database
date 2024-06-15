<?php

use Illuminate\Support\Facades\Route;

session_start(); // Init a session to store user data

if (!isset($_SESSION['logged'])) {
    $_SESSION['logged'] = false; // Initialize with a default value
}

Route::post('/login', function () {
    // This should be checked alongside database to ensure details are valid
    $_SESSION["logged"] = true; 

    return redirect('/'); // Redirect to homepage on success

})->name('login.submit');

Route::get('/logout', function () {
    // This should be checked alongside database to ensure details are valid
    $_SESSION["logged"] = false; 

    return redirect('/'); // Redirect to homepage on success

})->name('logout.submit');