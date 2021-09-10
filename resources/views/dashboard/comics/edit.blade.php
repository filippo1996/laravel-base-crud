@extends('templates.layout')
@section('title', 'Modifica comics ')
@section('content')

{{ Breadcrumbs::render('comics.edit', $comic) }}

<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" value="{{ $comic->title }}" id="title" required>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Thumb</label>
      <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}" id="thumb" required>
    </div>
    <div class="mb-3">
      <label class="form-label" for="price">Price</label>
      <input type="number" class="form-control" name="price" value="{{ $comic->price }}" id="price" min="0" max="200" required>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" value="{{ $comic->series }}" id="series" required>
      </div>
      <div class="mb-3">
        <label for="releaseDate" class="form-label">Release date</label>
        <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}" id="releaseDate" required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="type">Type</label>
        <input type="text" class="form-control" name="type" value="{{ $comic->type }}" id="type" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="4">{{ $comic->description }}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection