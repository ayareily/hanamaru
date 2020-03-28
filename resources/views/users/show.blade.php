@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    <div class="card mt-3">
      <div class="card-body">
        <div class="d-flex flex-row">
          <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
            <i class="fas fa-user-circle fa-3x"></i>
          </a>
        </div>
        <h2 class="h5 card-title m-0">
          <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
            {{ $user->nickname }}
          </a>
        </h2>
        <div class="m-0">
          <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
            （＊{{ $user->name }}）
          </a>
        </div>
      </div>


    
      @if( Auth::id() === $user->id )
    <!-- dropdown -->
      <div class="ml-auto card-text float-right">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <button type="button" class="btn btn-link text-muted m-0 p-2">
            <i class="fas fa-ellipsis-v"></i>
          </button>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("users.edit", ['name' => $user->name]) }}">
              <i class="fas fa-pen mr-1"></i>表示名編集
            </a>
        </div>
      </div>
      </div>
      @endif
    </div>
  </div>
@endsection