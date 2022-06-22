@extends('layouts.public')

@section('title', 'Guilds')

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
        @foreach($guilds as $guild)
            <x-table.row>
                <x-table.data>
                    {{ $guild->id }}
                </x-table.data>
                <x-table.data>
                    {{ $guild->name }}
                </x-table.data>
                <x-table.data>
                    {{ $guild->xp }}
                </x-table.data>
                <x-table.data>
                    {{ count($guild->users) }}
                </x-table.data>
                <x-table.data>
                    <a href="{{ route('guilds.edit', ['id' => $guild->id]) }}">Bewerk</a>
                    <div class="float-right">
                        <x-form action="{{ route('guilds.destroy', ['id' => $guild->id]) }}">
                            @method('DELETE')
                            <button type="submit">Verwijderen</button>
                        </x-form>
                    </div>
                </x-table.data>
            </x-table.row>
        @endforeach  
    </x-table>  
@endsection