<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExternalApiReachTest extends TestCase
{
    /**
     * Test the base guilds api endpoint.
     *
     * @return void
     */
    public function test_base_guilds_endpoint_is_reachable()
    {
        $response = $this->get("http://cl2b4-guilds.herokuapp.com/");

        $response->assertStatus(200);
    }

    /**
     * Test the base levels api endpoint.
     *
     * @return void
     */
    public function test_base_levels_endpoint_is_reachable()
    {
        $response = $this->get("http://devops-b2c6.herokuapp.com");

        $response->assertStatus(200);
    }
}
