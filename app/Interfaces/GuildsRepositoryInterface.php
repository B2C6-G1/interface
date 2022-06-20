<?php

namespace App\Interfaces;

interface GuildsRepositoryInterface
{
    /**
     * Get all the resources from the api.
     * 
     * @return array
     */
    public function all() : array;

    /**
     * Create a new resource with the api.
     * 
     * @param array $attributes
     * @return bool
     */
    public function store(array $attributes) : bool;

    /**
     * Update an existing resource with the api.
     * 
     * @param array $attributes
     * @param int $id
     * @return bool
     */
    public function update(array $attributes, int $id) : bool;
}