<?php

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
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

//Роуты авторизации
Auth::routes();
// Route::get('/body', [App\Http\Controllers\HomeController::class, 'body'])->name('body');
//Основная страница
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Страница поиска билетов
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
//Бронирование
Route::post('/bookings', [App\Http\Controllers\BookingController::class, 'store'])->name('bookings.store');
//Отображение забронированных мест
Route::get('/bookings', function () {
    $bookings = Booking::all();
    return view('booking', ['bookings' => $bookings]);
})->name('booking');
