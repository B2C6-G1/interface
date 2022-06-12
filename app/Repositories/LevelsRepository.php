<?php

namespace App\Repositories;

use App\Interfaces\LevelsRepositoryInterface;
use Illuminate\Support\Facades\Http;

class LevelsRepository extends BaseExternalApiRepository implements LevelsRepositoryInterface
{
    /**
     * Levelsrepository constructor.
     * 
     * @param string $resource
     */
    public function __construct($resource = 'levels')
    {
        parent::__construct($resource);
    }
}