@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Modifica il post</h1>

  <form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?: $post->title }}">
      @error('title')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="content">Testo</label>
      <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{ old('content') ?: $post->content }}</textarea>
      @error('content')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="publisheder_at">Data di pubblicazione</label>
      <input type="date" class="form-control @error('date') is-invalid @enderror" value=" {{old('publisheder_at')?: $post->publisheder_at}} " name="publisheder_at" id="publisheder_at">
      @error('publisheder_at')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

  <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger">Elimina</button>
  </form>

</div>

@endsection