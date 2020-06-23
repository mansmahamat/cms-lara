@extends('layouts.app')

@section('content')
        <h1>Modifier article</h1>
        {{ Form::open(['action'=> ['PostsController@update', $post->id], 'method' => 'POST' , 'enctype'=> 'multipart/form-data'] )}}

            <div class="form-group">
                {{Form::label('title', 'Titre')}}
                {{Form::text('title',  $post->title, ['class'=>'form-control', 'placeholder'=> 'Le titre du post'])}}
            </div>

            <div class="form-group">
                {{Form::label('body', 'Contenu')}}
                {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=> 'Le contenu du post'])}}
            </div>

            <div class="form-group">
                {{Form::file('cover_image')}}
               
            </div>
            
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Modifier', ['class' => 'btn btn-primary']) }}
        
        {{ Form::close() }}

@endsection