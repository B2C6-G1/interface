<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Repositories\TeamsRepository;

class TeamsRepositoryTest extends TestCase
{
    /**
     * Test the TeamsRepository store functionality.
     *
     * @return void
     */
    public function test_teams_repository_can_create_team()
    {
        $repository = new TeamsRepository();

        $this->assertTrue($repository->store(['name' => 'unitTestTeam', 'users' => []]));
    }

    /**
     * Test the TeamsRepository all functionality.
     * 
     * @return void
     */
    public function test_teams_repository_can_fetch_all_teams()
    {
        $repository = new TeamsRepository();
        
        $this->assertTrue(is_array($repository->all()));
    }

    /**
     * Test the TeamsRepository whereName functionality.
     * 
     * @return void
     */
    public function test_teams_repository_can_fetch_by_name()
    {
        $repository = new TeamsRepository();

        $this->assertTrue(is_array($repository->whereName('unitTestTeam')));
    }

    /**
     * Test the TeamsRepository find functionality.
     * 
     * @return void
     */
    public function test_teams_repository_can_fetch_by_id()
    {
        $repository = new TeamsRepository();
        $test_team = $repository->whereName('unitTestTeam')[0];

        $this->assertTrue(is_array($repository->find($test_team->id)));
    }

    /**
     * Test the TeamsRepository delete functionality.
     * 
     * @return void
     */
    public function test_teams_repository_can_delete_team()
    {
        $repository = new TeamsRepository();
        $test_team = $repository->whereName('unitTestTeam')[0];

        $this->assertEquals(is_object($test_team), true);
        
        $reponse = $repository->delete($test_team->id);
        $this->assertTrue($reponse);
    }
}
