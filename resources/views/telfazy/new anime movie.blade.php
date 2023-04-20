<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/images/favLogo.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telfazy | أحدث الأفلام الانمي</title>
</head>

<body>
    @include('telfazy.loading')
    @include('telfazy/navbar3')

    <div class="container1 more" style="margin-bottom: 0px; min-height: 70%;">

        @foreach ($newanimemovie as $movie)

        <div class="colling">
<div class="poster">
    <a href="{{ route('details', $movie->id) }}" title="{{ $movie->movie_name }}  شاهد الان " class="poster__link">
        <img class="poster__img lazy"src="{{$movie->image_movie }}">
        <span class="ribbon r3">
            <span>
                {{$movie->quality }}
            </span>
        </span>
        <div class="poster__button">
            <i class="fas fa-play-circle fa-4x"></i>
        </div>
        <div class="poster__title">
            <span class="title">{{ $movie->movie_name }}</span>
            <div class="caption">

            @foreach($movie->categories as $category)
            <span>{{ $category->category }}</span>
            @endforeach
                <span> <i class="fab fa-imdb fa-lg" style="color: #FEC107;"></i>&nbsp;{{ $movie->imdb }}</span>
            </div>
        </div>
    </a>
</div>
</div>


@endforeach
</div>
{{ $newanimemovie->links('telfazy/pagination') }}
    @include('telfazy/footer')
    <script src="/js/loading.js"></script>
</body>
</html>
