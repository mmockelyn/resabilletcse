<?php

namespace Http\Controllers\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginControllerTest extends TestCase
{
    use DatabaseMigrations;
    public function testShowLoginForm()
    {
        $this->seed();
        $this->get('/login')->assertStatus(200);
    }

    public function testLoginIsValid()
    {
        $this->seed();
        $data = [
            'code' => "resabillet1",
            'email' => "test@test.com",
            'password' => "admin123456",
            'password_confirmation' => "admin123456",
            'firstname' => "Doe",
            'lastname' => "John",
            'type_cpt' => 5,
            'address' => "4 Rue du Coudray",
            'postal' => "85100",
            'city' => "Les Sables d'Olonne",
            'phone' => "+33749061225"
        ];

        $user = $this->post('/register', $data);

        $this->post('/login', ["email" => "test@test.com", "password" => "admin123456"])->assertStatus(302);
    }

    public function testRedirectAccess()
    {
        $this->seed();
        $this->get('/account/subscribe')->assertStatus(302);
    }
}
