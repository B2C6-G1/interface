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
}