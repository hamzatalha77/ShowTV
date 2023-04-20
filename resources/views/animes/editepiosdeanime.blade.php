
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="{{ route('anime_episodes.update',[$episode->id]) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')

    {{-- <h1>{{ $season->season_name }}</h1>   <h1>{{ $season->number }}</h1> --}}

    <div class="mb-3">
      <label class="form-label">Episode Name</label>
      <input type="text" class="form-control" value="{{ $episode->episode_name }}" name="episode_name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Server 1</label>
      <input type="text" class="form-control" name="server_1" value="{{ $episode->server_1 }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Server 2</label>
      <input type="text" class="form-control" name="server_2" value="{{ $episode->server_2 }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Server 3</label>
      <input type="text" class="form-control" name="server_3" value="{{ $episode->server_3 }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Server 4</label>
      <input type="text" class="form-control" name="server_4" value="{{ $episode->server_4 }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Server 5</label>
      <input type="text" class="form-control" name="server_5" value="{{ $episode->server_5 }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Server 6</label>
      <input type="text" class="form-control" name="server_6" value="{{ $episode->server_6 }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Episode Download Link 1</label>
      <input type="text" class="form-control" name="download_link_1" value="{{ $episode->download_link_1 }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Episode Download Link 2</label>
      <input type="text" class="form-control" name="download_link_2" value="{{ $episode->download_link_2 }}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Episode Download Link 3</label>
      <input type="text" class="form-control" name="download_link_3" value="{{ $episode->download_link_3 }}" id="exampleInputPassword1">
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
    <button type="submit" class="btn btn-primary">Edit Episode</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
