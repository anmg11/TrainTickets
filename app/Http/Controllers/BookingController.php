<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

/**
 * Контроллер для работы с бронированиями.
 */

class BookingController extends Controller
{
    /**
     * Сохранение нового бронирования в базе данных.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Получение данных из запроса
        $from = $request->input('from');
        $to = $request->input('to');
        $departure = $request->input('departure');
        $date = $request->input('date');

        // Создание объекта бронирования и сохранение в базе данных
        $booking = new Booking();
        $booking->from = $from;
        $booking->to = $to;
        $booking->departure = $departure;
        $booking->date = $date;
        // Дополнительные поля для связи с пользователем, например:
        $booking->name = auth()->user()->name;
        
        $booking->save();

        // Перенаправление на страницу подтверждения бронирования или другую нужную страницу
        return redirect()->route('home');
    } 
}
