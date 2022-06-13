<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UsersRepositoryInterface;

class UsersController extends Controller
{
    /**
     * The users repository.
     * 
     * @var UsersRepositoryInterface
     */
    private UsersRepositoryInterface $repository;

    /**
     * Userscontroller constructor.
     * 
     * @return void
     */
    public function __construct(UsersRepositoryInterface $interface)
    {
        $this->repository = $interface;
    }
}
