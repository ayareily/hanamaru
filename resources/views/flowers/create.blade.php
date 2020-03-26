@extends('app')

@section('title', 'はなまる追加')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
    <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">はなまる追加</h2>
            <div class="card-text">
              <form method="POST" action="{{ route('flowers.store') }}">
                @include('flowers.form')
                <button type="submit" class="btn purple-gradient btn-block">はなまる追加</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection