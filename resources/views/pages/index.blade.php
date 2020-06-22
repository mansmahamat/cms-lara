@extends('layouts.app')

@section('content')
    <h1 class="text-center">Bienvenue sur Laravel Football</h1>
    <p class="text-center mb-5">Toutes les actualités</p>
    <img class="container" src="{{ URL::to('/assets/img/football.svg') }}" alt="">
@endsection