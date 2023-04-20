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
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telfazy| بحث </title>
</head>
<body>
    @include('telfazy.loading')
    @include('telfazy.navbar3')

    <div class="container1 more" style="margin-bottom: 0px; min-height: 70%;">

@foreach ($results as $result)

        <div class="colling">
<div class="poster">

    <div title="{{  $result->movie_name }} {{ $result->serie_name }} {{ $result->anime_name }}  شاهد الان " class="poster__link">
        @if(!@empty($result->movie_name))
        <a href="{{ route('details', $result->id) }}">
        <img class="poster__img lazy"src="{{ $result->image_movie .$result->serie_photo .$result->image_anime }}">
        <div class="poster__button">
            <i class="fas fa-play-circle fa-4x"></i>
        </div>
        </a>
        @endif
        @if(!@empty($result->serie_name))
        <a href="{{ route('showserie', $result->id) }}" >
        <img class="poster__img lazy"src="{{ $result->image_movie .$result->serie_photo .$result->image_anime }}">
        <div class="poster__button">
            <i class="fas fa-play-circle fa-4x"></i>
        </div>
        </a>
        @endif
        @if(!@empty($result->anime_name))
        <a href="{{ route('showanime', $result->id) }}">
        <img class="poster__img lazy"src="{{ $result->image_movie .$result->serie_photo .$result->image_anime }}">
        <div class="poster__button">
            <i class="fas fa-play-circle fa-4x"></i>
        </div>
        </a>
        @endif
        {{-- <img href="{{ route('details', $result->id) }}" href="{{ route('showserie', $result->id) }}" href="{{ route('showanime', $result->id) }}" class="poster__img lazy"src="{{ $result->image_movie .$result->serie_photo .$result->image_anime }}"> --}}

        <div class="poster__title">
            <a href="{{ route('details', $result->id) }}">{{ $result->movie_name }} </a>
            <a href="{{ route('showserie', $result->id) }}">{{ $result->serie_name }} </a>
            <a href="{{ route('showanime', $result->id) }}">{{ $result->anime_name }} </a>
            <div class="caption">

                @if ($result->categories!=null)

                @foreach($result->categories as $category)
                <span>{{ $category->category }}</span>
                @endforeach

                @endif

                @if ($result->genres!=null)
                @foreach($result->genres as $genre)
                <span>{{ $genre->genre }}</span>
                @endforeach

                @endif

                @if ($result->types!=null)
                @foreach($result->types as $type)
                <span>{{ $type->type }}</span>
                @endforeach

                @endif


                <span> <i class="fas fa-star" style="color: #FEC107"></i>&nbsp;{{ $result->imdb }}{{ $result->imdb }}{{ $result->imdb }}</span>
            </div>
        </div>

    </div>
</div>
</div>




@endforeach
</div>
{{ $results->links('telfazy/pagination') }}
    @include('telfazy/footer')
    <script src="/js/loading.js"></script>
</body>
</html>




