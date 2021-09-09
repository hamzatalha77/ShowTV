
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $serie->serie_name }}</h1>
@stop

@section('content')

    <h1>{{ $serie->serie_name }}</h1>
    @foreach ($serie->genres as $genre)
             {{ $genre->genre }}
    @endforeach
<br>
    @foreach ($seasons as $season)
       <a href="{{ route('showseasons1', $season->id) }}">{{ $season->season_name }}</a> <br>
    @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
