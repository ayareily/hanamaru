@extends('app')

@section('title','HOME')

@section('content')
    @include('nav')

    <div class="container">
  @foreach($flowers as $flower)
    @include('flowers.card')
  @endforeach
  </div>

@endsection