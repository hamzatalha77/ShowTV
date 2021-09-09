
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="{{ route('updateepisode',[$episode->id]) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')

    {{-- <h1>{{ $season->season_name }}</h1>   <h1>{{ $season->number }}</h1> --}}
    <input  type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control" id="user_name" hidden>
    <div class="mb-3">
      <label class="form-label">Episode Name</label>
      <input type="text" class="form-control" value="{{ $episode->episode_name }}" name="episode_name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Episode Link</label>
      <input type="text" class="form-control" name="episode_link" value="{{ $episode->episode_link }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Episode Download Link</label>
      <input type="text" class="form-control" name="download_link" value="{{ $episode->download_link }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">IMDB Episode</label>
      <input type="text" class="form-control" name="imdb_episode" value="{{ $episode->imdb_episode }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Duration</label>
      <input type="text" class="form-control" name="duration" value="{{ $episode->duration }}" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label>Quality</label>
        </br> </br>
    <div class="form-check form-check-inline">
        <input type="radio" name="quality" {{ $episode->quality == '1080P' ? 'checked' : ''}} value="1080P"class="form-check-input">
        <label class="form-check-label" for="inlineRadio1">1080P</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" {{ $episode->quality == '720P' ? 'checked' : ''}} value="720P"class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">720P</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" {{ $episode->quality == '480p' ? 'checked' : ''}} value="480p"class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">480p</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" {{ $episode->quality == '360p' ? 'checked' : ''}} value="360p"class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">360p</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" {{ $episode->quality == '240p' ? 'checked' : ''}} value="240p"class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">240p</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" {{ $episode->quality == '144p' ? 'checked' : ''}} value="144p"class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">144p</label>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
