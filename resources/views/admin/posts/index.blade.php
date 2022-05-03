@extends('layouts.app')

@section('content')

<ul>
  @foreach ($posts as $value)
  <li>
    {{ $value->title }}
  </li>
  @endforeach
</ul>

@endsection