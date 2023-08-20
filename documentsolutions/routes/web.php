<?php

use App\Http\Controllers\EmailController;
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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/{slug}', function () {
    return view('index');
});

Route::prefix('app')->group(function() {
    Route::post('/contact', [EmailController::class, 'contact']);
    Route::post('/quote', [EmailController::class, 'quote']);
    Route::post('/subscripe', [EmailController::class, 'subscripe']);
    Route::post('/unsubscripe', [EmailController::class, 'unsubscripe']);
});
