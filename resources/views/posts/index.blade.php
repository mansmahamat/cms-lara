@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Articles </h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
        <div class="jumbotron">
            <h3 class="display-4">{{ $post->title }} </h3>
            <p class="lead">{{ $post->body }}</p>
            <p class="lead">{{ $post->created_at }}</p>
          </div>
        @endforeach
    @else
        
    @endif
@endsection