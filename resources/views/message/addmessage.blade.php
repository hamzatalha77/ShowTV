@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <form action="{{ route('messages.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="myform">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="metro-input">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image_message" class="metro-input">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="metro-input">
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category" class="metro-input">
            </div>
            <div class="form-group">
                <label>Imdb</label>
                <input type="text" name="imdb" class="metro-input">
            </div>
            <div class="form-group">
                <label>Duration</label>
                <input type="text" name="duration" class="metro-input">
            </div>
            <div class="form-group">
                <label>Quality</label>
                <input type="text" name="quality" class="metro-input">
            </div>
            <div class="form-group">
                <label>Language</label>
                <input type="text" name="language" class="metro-input">
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" class="metro-input">
            </div>
            <button type="submit" class="button mif-download primary large rounded">  Add This Message</button>
        </div>
    </form>
@stop

@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,100&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        .myform{
            position: relative;
            width: 29%;
            padding-top: 2%;
            left: 30%;
        }

    </style>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
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
