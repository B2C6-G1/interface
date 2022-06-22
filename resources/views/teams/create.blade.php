@extends('layouts.public')

@section('title', 'Nieuw team')

@section('content')
    <x-card header="Teamgegevens">
        <x-form action="{{ route('teams.store') }}">
            <x-form.input name="name" placeholder="Naam" type="text"/>

            <div class="my-6 float-right">
                <x-form.submit text="Aanmaken"/>
            </div>
        </x-form>
    </x-card>
@endsection