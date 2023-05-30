@extends ('layouts.app')

@section ('css')
    <link rel="stylesheet" href="/css/style.css">
@endsection

@section ('content')

<main>
    <form method="get" action="{{ route('search') }}">
        <label for="from">Откуда:</label>
        <input type="text" id="from" name="from">
        <label for="to">Куда:</label>
        <input type="text" id="to" name="to">
        <label for="date">Дата:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Найти</button>
    </form>
    
    <section>
        <h2>Результаты поиска</h2>
        <div class="row">
            @foreach($tickets as $ticket)
            <div class="col-md-6">
                <div class="ticket">
                    <h3>{{$ticket->From}} - {{$ticket->To}}</h3>
                    <p>Дата: <span>{{$ticket->Date}}</span></p>
                    <p>Отправление: <span>{{$ticket->Departure}}</span></p>
                    <p>Прибытие: <span>{{$ticket->Arrival}}</span></p>
                    <p>Продолжительность: <span>{{$ticket->Time_in_road}}</span></p>
                    <p>Цена: <span>{{$ticket->Price}} Руб.</span></p>
                    <form method="post" action="{{ route('bookings.store') }}">
                        @csrf
                        <input type="hidden" name="from" value="{{ $ticket->From }}">
                        <input type="hidden" name="to" value="{{ $ticket->To }}">
                        <input type="hidden" name="date" value="{{ $ticket->Date }}">
                        <input type="hidden" name="departure" value="{{ $ticket->Departure }}">
                        <button type="submit">Забронировать</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>

@endsection 