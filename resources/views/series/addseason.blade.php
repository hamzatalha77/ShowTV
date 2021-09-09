
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<label class="title">Add New Season for {{$serie->serie_name}}</label>
@stop

@section('content')
<form action="{{ route('newseasons',[$serie->id]) }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="fromi">
@csrf
<input  type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control" id="user_name" hidden>
<input id="input-b1" name="photo_season" type="file" class="file" data-browse-on-zone-click="true">
<h1>{{$serie->serie_name}}</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Season Name</label>
      <input type="text" class="form-control" name="season_name" value="{{$serie->serie_name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Season Number</label>
      <input type="text" class="form-control" name="number" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label>Youtube Link</label>
        <input type="text" name="youtube_link" class="metro-input">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">IMDB Season</label>
      <input type="text" class="form-control" name="imdb_season" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop

@section('css')
<style>
    .fromi{
        position: relative;
        width: 80%;
        left: 10rem;
    }
    .title{
        position: relative;
        left: 35rem;
        font-size: 2rem;
        color: red;
    }
</style>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/js/plugins/piexif.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/js/fileinput.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.3/js/locales/LANG.js"></script>
<script src="https://cdn.jsdelivr.net/npm/html-duration-picker/dist/html-duration-picker.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
@stop
