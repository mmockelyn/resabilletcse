<?php

namespace Http\Controllers\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class VerifControllerTest extends TestCase
{

    use DatabaseMigrations;
    public function testSiretIsValid()
    {
        $this->seed();
        $data = ["siret" => "81177223500024"];

        $response = $this->postJson('/api/verif/siret', $data);
        $response->assertStatus(200);
        $response->assertJson(['header' => ["statut" => 200]]);
    }

    public function testSiretIsInvalid()
    {
        $this->seed();
        $data = ["siret" => "81177223500034"];

        $response = $this->postJson('/api/verif/siret', $data);
        $response->assertStatus(200);
        $response->assertJson(['header' => ["statut" => 404]]);
    }
}
