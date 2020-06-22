@extends('layouts.app')

@section('content')
        <h1>Créer un nouvel article</h1>
        {{ Form::open(['action'=> 'PostsController@store', 'method' => 'POST'] )}}

            <div class="form-group">
                {{Form::label('title', 'Titre')}}
                {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=> 'Le titre du post'])}}
            </div>

            <div class="form-group">
                {{Form::label('body', 'Contenu')}}
                {{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=> 'Le contenu du post'])}}
            </div>

            {{ Form::submit('Poster', ['class' => 'btn btn-primary']) }}
        
        {{ Form::close() }}

@endsection