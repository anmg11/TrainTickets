<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth()
    {
        // Авторизуем пользователя          
        $response = $this->post('/login', [
            'email' => 'testuser@example.com',
            'password' => 'password',
        ]);

        // Проверяем, что пользователь авторизовался
        $this->assertTrue(Auth::check());

        // Проверяем, что приложение перенаправило пользователя на главную страницу
        $response->assertRedirect('/');
    }

    public function test_registration()
    {
        $userData = ([
            'name' => 'testusername',
            'email' => 'testuser@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        // Отправляем POST-запрос для регистрации пользователя
        $response = $this->post('/register', $userData);

        // Проверяем, что регистрация прошла успешно и было выполнено перенаправление
        // 302 перенаправление на другую страницу
        $response->assertStatus(302);

        // Проверяем, что пользователь был сохранен в базе данных
        $this->assertDatabaseHas('users', [
            'email' => $userData['email'],
        ]);
    }
}
