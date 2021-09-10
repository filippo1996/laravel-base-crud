@extends('templates.layout')
@section('title', 'I tuoi comics')
@section('content')

    {{ Breadcrumbs::render('comics.index') }}

    @if(Session::has('alert-message'))
        <x-alert :status="Session::get('alert-message')['status']" :message="Session::get('alert-message')['message']"/>
    @endif

    <h3>Totale comics: {{ $count }}</h3>
    <x-table-crud :items="$comics"/>

    <div class="fixed-btn">
        <a class="btn btn-primary" aria-current="page" href="{{ route('comics.create') }}">create</a>
    </div>
@endsection