@extends('layouts.public')

@section('title', 'Team bewerken')

@section('content')
    <x-card header="Teamgegevens">
        <x-form action="{{ route('teams.update', ['id' => $team->id]) }}">
            <x-form.input name="name" placeholder="Naam" type="text" value="{{ $team->name }}"/>
            @method('put')
            <div class="my-6 float-right">
                <x-form.submit text="Bijwerken"/>
            </div>

            <input type="hidden" name="xp" value="{{ $team->xp }}">

            @foreach($team->users as $user)
                <input type="hidden" name="users[]" value="{{ $user->id }}">
            @endforeach
        </x-form>
    </x-card>
@endsection