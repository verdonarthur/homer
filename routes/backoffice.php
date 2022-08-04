<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::prefix('/backoffice')->middleware(['auth', 'auth.can-access-backoffice'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backoffice/dashboard');
    })->name('dashboard');
});

Route::resource('pages', PagesController::class);

