<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\LevelsRepositoryInterface;

class LevelsController extends Controller
{
    /**
     * The levels repository.
     * 
     * @var LevelsRepositoryInterface
     */
    private LevelsRepositoryInterface $repository;

    /**
     * Levelscontroller constructor.
     * 
     * @return void
     */
    public function __construct(LevelsRepositoryInterface $interface)
    {
        $this->repository = $interface;
    }
}
