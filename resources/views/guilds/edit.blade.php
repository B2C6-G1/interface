@extends('layouts.public')

@section('title', 'Nieuwe guild')

@section('content')
    <x-card header="Guildgegevens">
        <x-form action="{{ route('guilds.update', ['id' => $guild->id]) }}">
            <x-form.input name="name" placeholder="Naam" type="text" value="{{ $guild->name }}"/>
            @method('put')
            <div class="my-6 float-right">
                <x-form.submit text="Bijwerken"/>
            </div>

            <input type="hidden" name="xp" value="{{ $guild->xp }}">
        </x-form>
    </x-card>
@endsection