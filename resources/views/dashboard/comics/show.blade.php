@extends('templates.layout')
@section('title', 'Comics '.$comic->title)
@section('content')
    <div class="flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">{{ $comic->title }}</h2>
            <p class="lead">{{ $comic->description }}</p>
            <span class="badge bg-info text-dark">Prezzo {{ $comic->price }} €</span>
        </div>
        <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        </div>
    </div>
@endsection