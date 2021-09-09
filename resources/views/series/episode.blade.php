
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

{{$episode->season->serie->serie_name}}
<h2>{{$episode->season->number}}</h2>






<h1>{{ $episode->episode_name }}</h1>

<iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $episode->episode_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>




 <div class="con">
    @foreach ( $allepisodes as $episode)
    <h1>{{ $episode->episode_name }}</h1>
@endforeach
</div>




@foreach ($allseason as $season)

    {{ $season->season_name }}

@endforeach

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
