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

    /**
     * Find a resource by it's ID.
     * 
     * @param int $id
     * @return array
     */
    public function find(int $id) : array
    {
        $uri = $this->makeUrl([$this->endpoints['base'], $this->endpoints['all']]);
        $response = Http::get($uri, [
            'ids' => $id
        ]);

        return json_decode($response->body());
    }

    /**
     * Create a new resource with the api.
     * 
     * @param array $attributes
     * @return bool
     */
    public function store(array $attributes) : bool
    {
        $uri = $this->makeUrl([$this->endpoints['base'], $this->endpoints['save']]);
        
        $response = Http::post($uri, [[
            'name' => $attributes['name'],
            'users' => []
        ]]);

        return $response->ok();
    }

    /**
     * Update an existing resource with the api.
     * 
     * @param array $attributes
     * @param int $id
     * @return void
     */
    public function update(array $attributes, int $id) : bool
    {
        $uri = $this->makeUrl([$this->endpoints['base'], $this->endpoints['update']]);

        $response = Http::put($uri, [[
            'id' => $id,
            'xp' => $attributes['xp'],
            'name' => $attributes['name'],
            'users' => $attributes['users']
        ]]);

        return $response->ok();
    }

    /**
     * Delete an existing resource with the api.
     * 
     * @param int $id
     * @return bool
     */
    public function delete(int $id) : bool
    {
        $uri = $this->makeUrl([$this->endpoints['base'], $this->endpoints['delete']]);
        $uri = $uri . '?ids=' . $id; // lmao (guzzle geen ondersteuning voor query params bij delete).

        $response = Http::delete($uri);

        return $response->ok();
    }
}