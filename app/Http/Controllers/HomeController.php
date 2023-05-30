<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Booking;

/**
 * Контроллер для работы с основной страницей
 */

class HomeController extends Controller
{
     /**
     * Создает новый экземпляр контроллера.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Отображает главную страницу приложения.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('body');
    }
    /**
     * Выполняет поиск билетов на основе указанных критериев.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');
        $date = $request->input('date');
        
        $tickets = Ticket::query();
        
        if ($from) {
            $tickets->where('from', 'LIKE', "%{$from}%");
        }
    
        if ($to) {
            $tickets->where('to', 'LIKE', "%{$to}%");
        }
    
        if ($date) {
            $tickets->whereDate('date', $date);
        }
    
        $tickets = $tickets->get();
    
        return view('home', [
            'tickets' => $tickets
        ]);
    }
}
