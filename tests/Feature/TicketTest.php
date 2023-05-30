<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TicketTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_search()
    {
        // Авторизуем пользователя          
        $response = $this->post('/login', [
            'email' => 'testuser@example.com',
            'password' => 'password',
        ]);
        
        $from = 'Москва';
        $to = 'Санкт-перербург';
        $date = '2023-05-25';
        
        $response = $this -> get('/search', [
            'from' => $from,
            'to' => $to,
            'date' => $date,
        ]);

        $response->assertStatus(200);
    }
}
