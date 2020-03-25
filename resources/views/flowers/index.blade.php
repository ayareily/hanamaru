@extends('app')

@section('title','HOME')

@section('content')
    @include('nav')

    @foreach($flowers as $flower)
        <article>
            <h2>
                    {{ $flower->body }}
            </h2>
        </article>
    @endforeach


@endsection