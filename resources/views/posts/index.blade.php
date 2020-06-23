@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Articles </h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
        <div class="jumbotron">
            <h3 class="display-4 "><a class="text-danger" href="{{ url('/posts', $post->id) }}">{{ $post->title }}... <small>(lire la suite)</small></a> </h3>

            <small>Date : {{ $post->created_at->format('d-m-Y') }} par {{ $post->user->name  }} </small>
          </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>Aucun article à afficher</p>
    @endif
@endsection