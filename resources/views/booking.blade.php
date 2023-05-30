@extends ('layouts.app')

@section ('css')
    <link rel="stylesheet" href="/css/style.css">
@endsection

@section ('content')

<main>
    <div class="container">
        <h2 style="text-align: center">Забронированные места</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Откуда</th>
                    <th>Куда</th>
                    <th>Дата</th>
                    <th>Отправление</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->Name }}</td>
                    <td>{{ $booking->From }}</td>
                    <td>{{ $booking->To }}</td>
                    <td>{{ $booking->Date }}</td>
                    <td>{{ $booking->Departure }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection 