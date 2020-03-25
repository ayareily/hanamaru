@extends('app')

@section('title', 'はなまる編集')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="{{ route('flowers.update', ['flower' => $flower]) }}">
                @method('PATCH')
                @include('flowers.form')
                <button type="submit" class="btn purple-gradient btn-block">更新する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection