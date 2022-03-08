<?php

namespace Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testIndex()
    {
        $this->seed();
        $this->get('/')->assertStatus(200);
    }
}
