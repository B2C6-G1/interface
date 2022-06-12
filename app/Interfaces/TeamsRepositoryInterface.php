<?php

namespace App\Interfaces;

interface TeamsRepositoryInterface
{
    /**
     * Get all the resources from the api.
     * 
     * @return array
     */
    public function all() : array;
}