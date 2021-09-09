
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Movie</h1>
@stop

@section('content')
<div class="container1">
<h1>hello</h1>


 <div class="content1">

     <h1>{{ $movie->movie_name }}</h1>
     <h4>
     Category :
 @forelse($movie->categories as $category)
         &nbsp;&nbsp;{{ $category->category }}
     @empty
         <p>NO category</p>
     @endforelse
     </h4>
     <h4>Creator : {{ $movie->name_producer }}</h4>
    <h4>Date Release : {{ $movie->date_release }}</h4>
     <h4>IMDB : {{ $movie->imdb }}</h4>
     <h4>Duration : {{ $movie->duration }}</h4>

     <h4>Quality : {{ $movie->quality }}</h4>

     <h4>Language : {{ $movie->language }}</h4>
     <h4>Country : {{ $movie->country }}</h4>
     <h4>Description : {{ $movie->description }}</h4>
     <img src="{{ asset('image1/' .$movie->image_movie) }}" class="movie_image">

<div class="actors">
     <img src="{{ asset('image3/' .$movie->photo_actor1) }}" style=" border-radius: 50%;width:100px;height: 100px;">
    <div class="names">
     <h4>Country : {{ $movie->name_actor1 }}</h4>
     <h4>Description : {{ $movie->real_name_actor1 }}</h4>
</div>


     <img src="{{ asset('image4/' .$movie->photo_actor2) }}" style=" border-radius: 50%;width:100px;height: 100px;">
    <div class="names">
     <h4>Country : {{ $movie->name_actor2 }}</h4>
     <h4>Description : {{ $movie->real_name_actor2 }}</h4>
    </div>
     <img src="{{ asset('image5/' .$movie->photo_actor3) }}" style=" border-radius: 50%;width:100px; height: 100px;">
        <div class="names">
     <h4>Country : {{ $movie->name_actor3 }}</h4>
     <h4>Description : {{ $movie->real_name_actor3 }}</h4>
        </div>
</div>
 </div>

    <iframe width="560" height="315" src="{{ $movie->youtube_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



    </video>
    {{-- <iframe width="560" height="315" src="{{ $movie->youtube_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe src="{{ $movie->movie_link }}" width="640" height="360" frameborder="0" scrolling="auto" title="La Casa De Papel   Parte 5 Vol. 1   Tráiler Oficial   Netflix" allowfullscreen></iframe> --}}
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>

            .container1{
                position: relative;
                height: 44rem;
                width: 68rem;
                left: 32rem;
                top: -1rem;
                background: gray;
            }
            .content1{
                position: relative;
                height: 44rem;
                width: 39rem;
                left: 0rem;
                top: -3.5rem;
                background: rgb(228, 228, 228);
            }
            .movie_image{
                width: 74.4%;
                margin-left: 39rem;
                margin-top: -23.5rem;
            }
            .actors{
                position: relative;
                left: -30rem;
                top: -18rem;
            }
            .names{
                margin-left: 9rem;
                position: relative;
                top: -5rem;
            }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
