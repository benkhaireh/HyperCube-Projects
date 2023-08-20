<?php

use App\Http\Controllers\senderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| https://check.benkhaireh.net/getpixel.php?mailid=64acdc03ca923&red=
*/

Route::get('/tracker', function () {
    return view("emails/tracker");
});


Route::prefix('/send')->group(function() {
    Route::post('/quote', [senderController::class, 'quote']);
    Route::post('/message', [senderController::class, 'message']);
    Route::get('/trackit', [senderController::class, 'tracker']);
});

Route::get('/{any}', function () {
    return view("index");
})->where('any', '.*');
/**/
