<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/page-creation', [PageController::class, 'showPageCreationForm']);
Route::post('/page-creation', [PageController::class, 'createPage'])->name("page.create");
Route::resource("pages", PagesController::class)->only(["index", "edit", "show", "destroy"]);


require __DIR__.'/auth.php';
require __DIR__.'/backoffice.php';
