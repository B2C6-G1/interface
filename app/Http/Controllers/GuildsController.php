<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\GuildsRepositoryInterface;
use App\Http\Requests\GuildStoreRequest;

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

    /**
     * Show the form to create a new resource.
     * 
     * @return Illuminate\Http\Response
     */
    public function create()
    {
        return view('guilds.create');
    }

    /**
     * Store a new instance of the resource.
     * 
     * @param App\Http\Requests\GuildStoreRequest
     * @return Illuminate\Http\Response
     */
    public function store(GuildStoreRequest $request)
    {
        $validated = $request->validated();

        if(!$this->repository->store($validated))
        {
            return redirect()
                ->route('guilds.index');
            // todo add error
        }

        return redirect()
            ->route('guilds.index');
    }
}
