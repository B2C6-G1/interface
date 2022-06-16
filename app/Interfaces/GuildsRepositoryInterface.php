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
}