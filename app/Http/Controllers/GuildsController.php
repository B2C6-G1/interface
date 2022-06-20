<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\GuildsRepositoryInterface;
use App\Http\Requests\GuildStoreRequest;
use App\Http\Requests\GuildUpdateRequest;

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
     * Show the form to update an existing resource.
     * 
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $guild = $this->repository->find($id);

        return view('guilds.edit')
            ->with('guild', $guild[0]);
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

    /**
     * Update an existing instance of the resource.
     * 
     * @param App\Http\Requests\GuildUpdateRequest
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function update(GuildUpdateRequest $request, $id)
    {
        $validated = $request->validated();

        if(!$this->repository->update($validated, $id))
        {
            return redirect()
                ->route('guilds.index');
            // todo add error
        }

        return redirect()
            ->route('guilds.index');
    }
}
