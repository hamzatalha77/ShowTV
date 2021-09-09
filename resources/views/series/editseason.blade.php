@php
    $genres = App\Models\Genre::get();

@endphp
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif
    <form action="{{ route('updateseason',$season->id) }}" method="POST" enctype="multipart/form-data" style="width: 60%;position: relative;left: 20%">
        @csrf
        @method('PUT')
        <input  type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control" id="user_name" hidden>
        <div class="myform ">
            <div class="form-group">
                <label>Season Name</label>
                <input type="text" name="season_name" value="{{ $season->season_name }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Season Number</label>
                <input type="text" name="number" value="{{ $season->number }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>IMDB</label>
                <input type="number" value="{{ $season->imdb_season }}" name="imdb_season" step="0.01" min="0" class="metro-input">
            </div>
            <div class="form-group">
                <label>Youtube Link</label>
                <input type="text" name="youtube_link" value="{{ $season->youtube_link }}" class="metro-input">
            </div>
        <div class="image-upload-one">
            <div class="center">
              <div class="form-input">
                <label for="file-ip-1">
                  <img id="file-ip-1-preview" src="{{ asset('image1/' .$season->photo_season) }}">
                  <button type="button" class="imgRemove" onclick="myImgRemoveFunctionOne()"></button>
                </label>
                <input type="file"  name="photo_season" id="file-ip-1" accept="image/*" onchange="showPreviewOne(event);" hidden>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn11" type="submit">Submit form</button>
    </form>
@stop

@section('css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,100&display=swap');

    *{
        /*background: #ecf0f1;*/
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    .myform{
            position: relative;
            width: 72%;
            padding-top: 2%;
        }
        body {
          margin:0px;

        }
        .image-upload-one{
          position: relative;
          top: -52rem;
          left: -40rem;
      }
        .center {
          display:inline;
          margin: 3px;
        }

        .form-input {
            width: 23.6REM;
            height: 27.6rem;
            position: relative;
            padding: 3px;
            left: 92rem;
            top: 29rem;
            background: #fff;
            border: 2px dashed dodgerblue;
        }
        .form-input input {
          display:none;
        }
        .form-input label {
            display:block;
            width: 23rem;
            height: 27rem;
            background:#333;
            border-radius:10px;
            cursor:pointer;
        }

        .form-input img {
            width: 23rem;
            height: 27rem;
            margin: 2px;
        }

        .imgRemove{
            position: relative;
            bottom: 26.9rem;
            left: 90%;
            background-color: transparent;
            border: none;
            font-size: 30px;
            outline: none;
        }
        .imgRemove::after{
          content: ' \21BA';
          color: #fff;
          font-weight: 900;
          border-radius: 8px;
          cursor: pointer;
        }
        .btn11{
            position: relative;
            top: -25rem;
            width: 20rem;
            left: 10rem;
        }

</style>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

@section('js')
<script>
    function showPreviewOne(event){
            if(event.target.files.length > 0){
              let src = URL.createObjectURL(event.target.files[0]);
              let preview = document.getElementById("file-ip-1-preview");
              preview.src = src;
              preview.style.display = "block";
            }
          }
          function myImgRemoveFunctionOne() {
            document.getElementById("file-ip-1-preview").src = "https://i.ibb.co/ZVFsg37/default.png";
          }
</script>
    <<script src="https://cdn.jsdelivr.net/npm/html-duration-picker/dist/html-duration-picker.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
@stop
