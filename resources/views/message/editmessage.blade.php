@php
    $categories = App\Models\Category::get();

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
    <form action="{{ route('messages.update',$message->id) }}" method="POST" enctype="multipart/form-data" style="width: 60%;position: relative;left: 20%">
        @csrf
        @method('PUT')

        <div class="myform">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ $message->name }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image_message" value="{{ $message->image_message }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="{{ $message->description }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category" value="{{ $message->category }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Imdb</label>
                <input type="text" name="imdb" value="{{ $message->imdb }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Duration</label>
                <input type="text" name="duration" value="{{ $message->duration }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Quality</label>
                <input type="text" name="quality" value="{{ $message->quality }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Language</label>
                <input type="text" name="language" value="{{ $message->language }}" class="metro-input">
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" value="{{ $message->link }}" class="metro-input">
            </div>
            <button type="submit" class="button mif-download primary large rounded">  Edit This Message</button>
        </div>
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
          top: -120rem;
          left: -38rem;
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
