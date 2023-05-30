<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_search()
    {   
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('/search');

        $response->assertStatus(200);
    }

    public function test_home()
    {   
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
