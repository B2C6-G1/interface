@extends('layouts.public')

@section('title', 'Nieuwe guild')

@section('content')
    <x-card header="Guildgegevens">
        <x-form action="{{ route('guilds.store') }}">
            <x-form.input name="name" placeholder="Naam" type="text"/>

            <div class="my-6 float-right">
                <x-form.submit text="Aanmaken"/>
            </div>
        </x-form>
    </x-card>
@endsection