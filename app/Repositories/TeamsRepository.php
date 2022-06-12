<?php

namespace App\Repositories;

use App\Interfaces\TeamsRepositoryInterface;
use Illuminate\Support\Facades\Http;

class TeamsRepository extends BaseExternalApiRepository implements TeamsRepositoryInterface
{
    /**
     * Teamsrepository constructor.
     * 
     * @param string $resource
     */
    public function __construct($resource = 'teams')
    {
        parent::__construct($resource);
    }

    /**
     * Get all the resources from the api.
     * 
     * @return array
     */
    public function all() : array
    {
        $uri = $this->makeUrl([$this->endpoints['base'], $this->endpoints['all']]);
        $response = Http::get($uri);

        return json_decode($response->body());
    }
}