<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/backoffice')->middleware(['auth', 'auth.can-access-backoffice'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backoffice/dashboard');
    })->name('dashboard');
});
