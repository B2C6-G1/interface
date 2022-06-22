<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Repositories\GuildsRepository;

class GuildsRepositoryTest extends TestCase
{
    /**
     * Test the GuildsRepository store functionality.
     *
     * @return void
     */
    public function test_guilds_repository_can_create_guild()
    {
        $repository = new GuildsRepository();

        $this->assertTrue($repository->store(['name' => 'unitTestGuild', 'users' => []]));
    }

    /**
     * Test the GuildsRepository all functionality.
     * 
     * @return void
     */
    public function test_guilds_repository_can_fetch_all_guilds()
    {
        $repository = new GuildsRepository();
        
        $this->assertTrue(is_array($repository->all()));
    }

    /**
     * Test the GuildRepository whereName functionality.
     * 
     * @return void
     */
    public function test_guilds_repository_can_fetch_by_name()
    {
        $repository = new GuildsRepository();

        $this->assertTrue(is_array($repository->whereName('unitTestGuild')));
    }

    /**
     * Test the GuildsRepository find functionality.
     * 
     * @return void
     */
    public function test_guilds_repository_can_fetch_by_id()
    {
        $repository = new GuildsRepository();
        $test_guild = $repository->whereName('unitTestGuild')[0];

        $this->assertTrue(is_array($repository->find($test_guild->id)));
    }

    /**
     * Test the GuildRepository delete functionality.
     * 
     * @return void
     */
    public function test_guilds_repository_can_delete_guild()
    {
        $repository = new GuildsRepository();
        $test_guild = $repository->whereName('unitTestGuild')[0];

        $this->assertEquals(is_object($test_guild), true);
        
        $reponse = $repository->delete($test_guild->id);
        $this->assertTrue($reponse);
    }
}
