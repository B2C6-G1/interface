<?php

namespace App\Repositories;

use App\Interfaces\GuildsRepositoryInterface;
use Illuminate\Support\Facades\Http;

class GuildsRepository extends BaseExternalApiRepository implements GuildsRepositoryInterface
{
    /**
     * Guildsrepository constructor.
     * 
     * @param string $resource
     */
    public function __construct($resource = 'guilds')
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