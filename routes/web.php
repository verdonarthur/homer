<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PagesDisplayController;

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

    Route::resource("pages", PagesController::class);


require __DIR__.'/auth.php';
require __DIR__.'/backoffice.php';

Route::fallback(function() {
    return 'Hm, why did you land here somehow?';
})->middleware(['display_management']);
