<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;

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

Route::get('/crea-auto', [CarController::class,'create'])->name('car.create');

Route::post('/crea-auto/submit', [CarController::class,'store'])->name('car.store');

Route::get('/crea-categoria', [CategoryController::class, 'create'])->name('category.create');

Route::post('/crea-categoria/submit', [CategoryController::class,'store'])->name('category.store');

Route::get('/indice/categorie', [CategoryController::class, 'index'])->name('category.index');

Route::get('/dettaglio/categoria/{category}', [CategoryController::class,'show'])->name('category.show');

Route::get('modifica-categoria/{category}', [CategoryController::class, 'edit'])->name('category.edit');

Route::put('/modifica-categoria/submit', [CategoryController::class, 'update'])->name('category.update');

Route::delete('/cancella-categoria/{category}', [CategoryController::class,'destroy'])->name('category.delete');

