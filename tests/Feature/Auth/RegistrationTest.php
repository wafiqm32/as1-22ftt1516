<?php

namespace Tests\Feature\Auth;

<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> 7cc5bf7 (done change laravel logo)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
<<<<<<< HEAD
        $response->assertRedirect(RouteServiceProvider::HOME);
=======
        $response->assertRedirect(route('dashboard', absolute: false));
>>>>>>> 7cc5bf7 (done change laravel logo)
    }
}
