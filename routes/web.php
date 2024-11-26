<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sleep-5', function () {
    sleep(5);

    return 'Sorry, I slept for 5 seconds!';
});
