@extends('templates.layout')
@section('title', 'I tuoi comics')
@section('content')
    <div class="fixed-btn">
        <a class="btn btn-primary border-50" aria-current="page" href="#">+</a>
    </div>
    <x-table-crud :items="$comics"/>
@endsection