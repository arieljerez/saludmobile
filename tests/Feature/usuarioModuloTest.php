<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class usuarioModuloTest extends TestCase
{
    /** @test */
    function login()
    {
        $this->get("/")
             ->assertStatus(200)
             ->assertSee('DNI:');
    }
}
