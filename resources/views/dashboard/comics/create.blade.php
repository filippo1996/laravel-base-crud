@extends('templates.layout')
@section('title', 'Crea un nuovo comics')
@section('content')

{{ Breadcrumbs::render('comics.create') }}

<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" required>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Thumb</label>
      <input type="text" class="form-control" name="thumb" id="thumb" required>
    </div>
    <div class="mb-3">
      <label class="form-label" for="price">Price</label>
      <input type="number" class="form-control" name="price" id="price" step="0.01" min="0" max="200" required>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" id="series" required>
      </div>
      <div class="mb-3">
        <label for="releaseDate" class="form-label">Release date</label>
        <input type="date" class="form-control" name="sale_date" id="releaseDate" required>
      </div>
      <div class="mb-3">
        <label class="form-label" for="type">Type</label>
        <input type="text" class="form-control" name="type" id="type" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Store</button>
</form>

@endsection