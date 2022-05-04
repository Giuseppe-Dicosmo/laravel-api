@extends('layouts.app')

@section('content')

<div class="container">

  <form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">

      @error('title')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="content">Testo</label>
      <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{ old('content') }}</textarea>

      @error('content')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="publisheder_at">Data di pubblicazione</label>
      <input type="date" class="form-control @error('publisheder_at') is-invalid @enderror" id="publisheder_at" name="publisheder_at" value="{{ old('publisheder_at') }}">

      @error('publisheder_at')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="category_id">Categoria</label>
      <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
        <option value="">Seleziona</option>

        @foreach($categories as $value)
        <option value="{{ $value->id }}">{{ $value->name }}</option>
        @endforeach

      </select>

      @error('category_id')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</div>

@endsection