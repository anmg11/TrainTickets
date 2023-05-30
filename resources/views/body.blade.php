@extends ('layouts.app')

@section ('css')
    <link rel="stylesheet" href="/css/style.css">
@endsection

@section ('content')

<main>
    <h1>Поиск ЖД билетов</h1>

    <p>Добро пожаловать на наш сервис по поиску железнодорожных билетов. Здесь вы можете быстро и удобно найти подходящий поезд для вашего путешествия.</p>

    <form method="get" action="{{ route('search') }}">
        @csrf
        <label for="from">Откуда:</label>
        <input type="text" id="from" name="from">
        <label for="to">Куда:</label>
        <input type="text" id="to" name="to">
        <label for="date">Дата:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Найти</button>
    </form>
    
    
    <div class="additional-info">
        <h2>Почему выбирают нас?</h2>

        <ul>
            <li>Быстрый и удобный поиск билетов по различным направлениям</li>
            <li>Широкий выбор железнодорожных маршрутов</li>
            <li>Удобное и интуитивно понятное веб-приложение</li>
            <li>Высокое качество обслуживания и надежность</li>
            <li>Конкурентные цены и специальные предложения</li>
            <li>24/7 поддержка клиентов для решения вопросов</li>
        </ul>

        <p>Не теряйте время, начните планировать свое путешествие уже сегодня!</p>
    </div>

    <div class="testimonial-section">
        <h2>Отзывы наших клиентов</h2>

        <div class="testimonial">
            <img src="/img/avatar.png" alt="Avatar" class="avatar">
            <p style="margin: 0">"Сервис очень удобный и простой в использовании. Я всегда нахожу лучшие предложения на поезда. Рекомендую!"</p>
            <span class="author">- Иван Иванов</span>
        </div>

        <div class="testimonial">
            <img src="/img/avatar.png" alt="Avatar" class="avatar">
            <p style="margin: 0">"Спасибо за отличный сервис! Я нашел билеты на поезд со скидкой и смог сэкономить немало денег."</p>
            <span class="author">- Анна Петрова</span>
        </div>
    </div>
</main>

@endsection 