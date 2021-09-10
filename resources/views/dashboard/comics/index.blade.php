@extends('templates.layout')
@section('title', 'I tuoi comics')
@section('content')

    {{ Breadcrumbs::render('comics.index') }}

    <x-table-crud :items="$comics"/>

    <div class="fixed-btn">
        <a class="btn btn-primary" aria-current="page" href="#">create</a>
    </div>
@endsection