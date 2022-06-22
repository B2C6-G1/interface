<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\TeamsRepositoryInterface;
use App\Http\Requests\TeamStoreRequest;
use App\Http\Requests\TeamUpdateRequest;

class TeamsController extends Controller
{
    /**
     * The TeamsRepositoryInterface.
     * 
     * @var TeamsRepositoryInterface
     */
    private TeamsRepositoryInterface $repository;

    /**
     * TeamsController constructor.
     * 
     * @param TeamsRepositoryInterface $interface
     * @return void
     */
    public function __construct(TeamsRepositoryInterface $interface)
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
        $teams = $this->repository->all();

        return view('teams.index')
            ->with('teams', $teams);
    }

    /**
     * Show the form to create a new resource.
     * 
     * @return Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Show the form to update an existing resource.
     * 
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $team = $this->repository->find($id);

        return view('teams.edit')
            ->with('team', $team[0]);
    }

    /**
     * Store a new instance of the resource.
     * 
     * @param App\Http\Requests\TeamStoreRequest
     * @return Illuminate\Http\Response
     */
    public function store(TeamStoreRequest $request)
    {
        $validated = $request->validated();

        if(!$this->repository->store($validated))
        {
            return redirect()
                ->route('teams.index');
            // todo add error
        }

        return redirect()
            ->route('teams.index');
    }

    /**
     * Update an existing instance of the resource.
     * 
     * @param App\Http\Requests\TeamUpdateRequest
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function update(TeamUpdateRequest $request, $id)
    {
        $validated = $request->validated();

        if(!$this->repository->update($validated, $id))
        {
            return redirect()
                ->route('teams.index');
            // todo add error
        }

        return redirect()
            ->route('teams.index');
    }

    /**
     * Delete an existing instance of the resource.
     * 
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        if(!$this->repository->delete($id))
        {
            return redirect()
                ->route('teams.index');
            // todo add error
        }

        return redirect()
            ->route('teams.index');
    }
}
