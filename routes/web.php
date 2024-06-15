<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', function () {
    $username = Request::input('username');

    return redirect('/'); // Redirect to dashboard on success

})->name('login.submit');