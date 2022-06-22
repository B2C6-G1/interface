@extends('layouts.public')

@section('title', 'Teams')

@section('content')
    <x-table>
        <x-slot name="headers">
            <x-table.heading>
                #
            </x-table.heading>
            <x-table.heading>
                Naam
            </x-table.heading>
            <x-table.heading>
                XP
            </x-table.heading>
            <x-table.heading>
                Aantal gebruikers
            </x-table.heading>
            <x-table.heading>
                Actions
            </x-table.heading>
        </x-slot>
        @foreach($teams as $team)
            <x-table.row>
                <x-table.data>
                    {{ $team->id }}
                </x-table.data>
                <x-table.data>
                    {{ $team->name }}
                </x-table.data>
                <x-table.data>
                    {{ $team->xp }}
                </x-table.data>
                <x-table.data>
                    {{ count($team->users) }}
                </x-table.data>
                <x-table.data>
                    <a href="{{ route('teams.edit', ['id' => $team->id]) }}">Bewerk</a>
                    <div class="float-right">
                        <x-form action="{{ route('teams.destroy', ['id' => $team->id]) }}">
                            @method('DELETE')
                            <button type="submit">Verwijderen</button>
                        </x-form>
                    </div>
                </x-table.data>
            </x-table.row>
        @endforeach  
    </x-table>
    <div class="float-right">
        <a href="{{ route('teams.create') }}"
            class="mt-6 px-4 py-2 inline-flex items-center justify-center rounded-md border border-transparent text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
            Toevoegen
        </a>
    </div>
@endsection