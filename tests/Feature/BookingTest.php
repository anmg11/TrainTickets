<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store()
    {
        // Авторизуем пользователя          
        $response = $this->post('/login', [
            'email' => 'testuser@example.com',
            'password' => 'password',
        ]);

        // Данные для бронирования
        $from = 'Москва';
        $to = 'Санкт-Петербург';
        $departure = '10:00';
        $date = '2024-05-01';

        // Отправка POST-запроса для создания бронирования
        $response = $this->post('/bookings', [
            'from' => $from,
            'to' => $to,
            'departure' => $departure,
            'date' => $date,
        ]);

        // Проверка, что бронирование было успешно создано
        $response->assertRedirect(route('home'));

        // Проверка, что данные бронирования были сохранены в базе данных
        $this->assertDatabaseHas('bookings', [
            'from' => $from,
            'to' => $to,
            'departure' => $departure,
            'date' => $date,
        ]);
    }
}
