
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="{{ route('addepisode',[$season->id]) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf

  <h3>Add New Episode For: {{ $season->season_name }} Number:{{ $season->number }}  -- {{ $season->serie->serie_name }}</h3>

    <img class="image1" src="{{ asset('image1/' .$season->photo_season) }}">
<div class="con">
    <input  type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control" id="user_name" hidden>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Episode Name</label>
      <input type="text" class="form-control" name="episode_name" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Episode Link</label>
      <input type="text" class="form-control" name="episode_link" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Episode Download Link</label>
      <input type="text" class="form-control" name="download_link" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">IMDB Episode</label>
      <input type="text" class="form-control" name="imdb_episode" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Duration</label>
      <input type="text" class="form-control" name="duration" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label>Quality</label>
        <br>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" value="1080P" class="form-check-input" checked>
        <label class="form-check-label" for="inlineRadio1">1080P</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" value="720P" class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">720P</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" value="480p" class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">480p</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" value="360p" class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">360p</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" value="240p" class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">240p</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="quality" value="144p" class="form-check-input">
        <label class="form-check-label" for="inlineRadio2">144p</label>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>
@stop

@section('css')
<style>
    .image1{
        position: relative;
    width: 12rem;
    left: 82rem;
    height: 15rem;
    top: -6rem;
    }
    .con{
        position: relative;
    width: 49%;
    top: -11rem;
    left: 6rem;
    }
</style>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
@stop

@section('js')

@stop
