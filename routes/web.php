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

Route::controller(MainController::class)->group(function () {
  Route::get('/', 'home')->name('home');
  Route::get('/about', 'about')->name('about.index');
  Route::get('/services', 'services')->name('services.index');
  Route::get('/partners', 'partners')->name('partners.index');
  Route::get('/drugstores', 'drugstores')->name('drugstores.index');
  Route::get('/express-pharm', 'expressPharm')->name('express-pharm.index');
  Route::get('/contacts', 'contacts')->name('contacts.index');
});

require __DIR__.'/auth.php';
require __DIR__ . '/dashboard.php';
