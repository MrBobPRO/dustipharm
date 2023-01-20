<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about.index');
Route::get('/services', [MainController::class, 'services'])->name('services.index');
Route::get('/partners', [MainController::class, 'partners'])->name('partners.index');
Route::get('/drugstores', [MainController::class, 'drugstores'])->name('drugstores.index');
Route::get('/express-pharm', [MainController::class, 'expressPharm'])->name('express-pharm.index');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts.index');

require __DIR__.'/auth.php';
