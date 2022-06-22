<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TeamsPagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_teams_index_page_returns_response()
    {
        $response = $this->get('/app/teams');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_guilds_create_page_returns_response()
    {
        $response = $this->get('/app/teams/create');

        $response->assertStatus(200);
    }
}
