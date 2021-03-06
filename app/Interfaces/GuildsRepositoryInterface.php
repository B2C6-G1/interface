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
     * Find a resource by it's ID.
     * 
     * @param int $id
     * @return array
     */
    public function find(int $id) : array;

    /**
     * Find a resource by it's name.
     * 
     * @param string $name
     * @return array
     */
    public function whereName(string $name) : array;

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

    /**
     * Delete an existing resource with the api.
     * 
     * @param int $id
     * @return bool
     */
    public function delete(int $id) : bool;
}