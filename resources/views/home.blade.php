@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-dark">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <a href="/posts/create" class="btn btn-outline-primary mb-5 h4">Créer un article</a>

                    @if (count($posts) > 0 )
                    <table class="table table-hover">
                        <tr>
                            <th colspan="4" >Titre</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td >
                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">Modifier</a>
                            </td>
                            <td>
                                {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right' ]) !!}

                                {{ Form::hidden('_method', 'DELETE') }}
                          
                                {{ Form::submit('Supprimer', ['class'=>'btn btn-danger']) }}
                          
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>Aucun post </p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
