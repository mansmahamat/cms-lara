@extends('layouts.app')

@section('content')
        <div class="jumbotron">
            <h3 class="display-4 mb-4 ">{{ $posts->title }} </h3>
            <p class="lead">{!! $posts->body !!}</p>

            <small>Ecrit le : {{ $posts->created_at->format('d-m-Y h') }}</small>
          </div>
          <a href="/posts" class="btn btn-outline-primary mb-5">Retour aux articles</a>
        <a href="/posts/{{ $posts->id }}/edit" class="btn btn-outline-danger mb-5">Modifier</a>

      {!! Form::open(['action'=>['PostsController@destroy', $posts->id], 'method'=>'POST', 'class'=>'float-right' ]) !!}

      {{ Form::hidden('_method', 'DELETE') }}

      {{ Form::submit('Supprimer', ['class'=>'btn btn-danger']) }}

      {!! Form::close() !!}

@endsection

