<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\GuildsRepositoryInterface;

class GuildsController extends Controller
{
    /**
     * The GuildsRepositoryInterface.
     * 
     * @var GuildsRepositoryInterface
     */
    private GuildsRepositoryInterface $repository;

    /**
     * GuildsController constructor.
     * 
     * @param GuildsRepositoryInterface $interface
     * @return void
     */
    public function __construct(GuildsRepositoryInterface $interface)
    {
        $this->repository = $interface;
    }

    /**
     * Show a listing of the resource.
     * 
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $guilds = $this->repository->all();

        return view('guilds.index')
            ->with('guilds', $guilds);
    }
}
