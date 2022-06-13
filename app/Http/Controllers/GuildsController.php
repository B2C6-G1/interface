<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\GuildsRepositoryInterface;

class GuildsController extends Controller
{
    /**
     * The guilds repository.
     * 
     * @var GuildsRepositoryInterface
     */
    private GuildsRepositoryInterface $repository;

    /**
     * Guildscontroller constructor.
     * 
     * @return void
     */
    public function __construct(GuildsRepositoryInterface $interface)
    {
        $this->repository = $interface;
    }
}
