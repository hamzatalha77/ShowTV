
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

{{ $season->season_name }}
{{ $season->serie->serie_name }}
@foreach ($episodes as $episode)
  <a href="{{ route('showepisodes1', $episode->id) }}">{{ $episode->episode_name }}</a><br>
@endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
