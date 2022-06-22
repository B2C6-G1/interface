<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuildPagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_guilds_index_page_returns_response()
    {
        $response = $this->get('/app/guilds');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_guilds_create_page_returns_response()
    {
        $response = $this->get('/app/guilds/create');

        $response->assertStatus(200);
    }
}
