<?php

namespace App\Repositories;

use App\Interfaces\UsersRepositoryInterface;
use Illuminate\Support\Facades\Http;

class UsersRepository extends BaseExternalApiRepository implements UsersRepositoryInterface
{
    /**
     * Usersrepository constructor.
     * 
     * @param string $resource
     */
    public function __construct($resource = 'users')
    {
        parent::__construct($resource);
    }
}