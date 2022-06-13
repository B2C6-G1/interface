<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\TeamsRepositoryInterface;

class TeamsController extends Controller
{
    /**
     * The teams repository.
     * 
     * @var TeamsRepositoryInterface
     */
    private TeamsRepositoryInterface $repository;

    /**
     * Teamscontroller constructor.
     * 
     * @return void
     */
    public function __construct(TeamsRepositoryInterface $interface)
    {
        $this->repository = $interface;
    }
}
