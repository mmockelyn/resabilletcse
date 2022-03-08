<?php

namespace Http\Controllers\Auth;

use App\Http\Controllers\Auth\RegisterController;
use Database\Seeders\ShopSeeder;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testGetFormRegister()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testRegisterPartIsValid()
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

        $response = $this->post('/register', $data);
        $response->assertStatus(302);
        $this->assertDatabaseCount('users', 1);
    }

    public function testRegisterPartIsValidJson()
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

        $this->postJson('/register', $data)->assertStatus(201);
        $this->assertDatabaseCount('users', 1);
    }

    public function testRegisterProIsValid()
    {
        $this->seed();
        $data = [
            'code' => "resabillet1",
            'email' => "test@test.com",
            'password' => "admin123456",
            'password_confirmation' => "admin123456",
            'firstname' => "Doe",
            'lastname' => "John",
            'type_cpt' => 4,
            'address_pro' => "4 Rue du Coudray",
            'postal_pro' => "85100",
            'city_pro' => "Les Sables d'Olonne",
            'phone' => "+33749061225",
            'company' => "Testing",
            'siret' => "52180906100059"
        ];

        $response = $this->post('/register', $data);
        $response->assertStatus(302);
        $this->assertDatabaseCount('users', 1);
    }

    public function testRegisterPartIsInvalid()
    {
        $this->seed();
        $data = [
            'code' => "",
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

        $response = $this->post('/register', $data);
        $response->assertStatus(302);
        $this->assertDatabaseCount('users', 0);
    }

    public function testRegisterProIsInvalid()
    {
        $this->seed();
        $data = [
            'code' => "",
            'email' => "test@test.com",
            'password' => "admin123456",
            'password_confirmation' => "admin123456",
            'firstname' => "Doe",
            'lastname' => "John",
            'type_cpt' => 4,
            'address_pro' => "4 Rue du Coudray",
            'postal_pro' => "85100",
            'city_pro' => "Les Sables d'Olonne",
            'phone' => "+33749061225",
            'company' => "Testing",
            'siret' => "52180906100059"
        ];

        $response = $this->post('/register', $data);
        $response->assertStatus(302);
        $this->assertDatabaseCount('users', 0);
    }
}
