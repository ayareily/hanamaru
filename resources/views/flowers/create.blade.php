@extends('app')

@section('title', 'はなまる追加')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
          <h3>はなまる追加</h3>
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