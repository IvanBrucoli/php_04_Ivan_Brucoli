<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//rotte auto
Route::get('/cars', [CarController::class, 'CarIndex'])->name('car.index');



//inserimento dati

Route::get('/contattaci', [PublicController::class,'contactUs'])->name('contact.us');

Route::post('/contattaci/submit', [PublicController::class,'contactUsSubmit'])->name('contact.submit');    