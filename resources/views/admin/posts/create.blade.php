@extends('layouts.app')

@section('content')

<div class="container">

  <form>

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</div>

@endsection