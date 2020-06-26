@extends('layouts.app')

@section('content')
        <div class="jumbotron bg-danger">
            <h3 class="display-4 mb-4 text-white ">{{ $posts->title }} </h3>
            {{-- @if ($posts->cover_image != 'no_image.jpg')
            <img width="100%" src='/storage/cover_image/{{ $posts->cover_image }}' alt="image">
            @endif --}}
           
            <span id="show" class="text-white font-weight-lighter" width="100%">{!! $posts->body !!}</span>

            <small class="text-white">Ecrit le : {{ $posts->created_at->format('d-m-Y H:m') }} par {{ $posts->user->name  }}</small>
          </div>
          <a href="/posts" class="btn btn-outline-primary mb-5">Retour aux articles</a>
        
          @if (!Auth::guest())
            @if (Auth::user()->id === $posts->user_id)
              <a href="/posts/{{ $posts->id }}/edit" class="btn btn-outline-danger mb-5">Modifier</a>

              {!! Form::open(['action'=>['PostsController@destroy', $posts->id], 'method'=>'POST', 'class'=>'float-right' ]) !!}
        
              {{ Form::hidden('_method', 'DELETE') }}
        
              {{ Form::submit('Supprimer', ['class'=>'btn btn-danger']) }}
        
              {!! Form::close() !!} 
            @endif
          @endif
        
          

@endsection

