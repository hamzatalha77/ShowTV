<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @include('telfazy.navbar2')

    <div class="container1 more">

        @foreach ($movies as $movie)

        <div class="colling">
<div class="poster">
    <a href="{{ route('details', $movie->id) }}" title="Watch Now" class="poster__link">
        <img class="poster__img lazy"src="{{ asset('image1/' .$movie->image_movie) }}">
        <div class="poster__button">
            <i class="fas fa-play-circle fa-4x"></i>
        </div>
        <div class="poster__title">
            <span class="title">{{ $movie->movie_name }}</span>
            <div class="caption">
                @foreach($movie->categories as $category)
                <span>{{ $category->category }}</span>
                @endforeach
                <span> <i class="fas fa-star" style="color: #FEC107"></i>&nbsp;{{ $movie->imdb }}</span>
            </div>
        </div>
    </a>
</div>
</div>


@endforeach
</div>

    @include('telfazy/footer')
</body>
</html>
