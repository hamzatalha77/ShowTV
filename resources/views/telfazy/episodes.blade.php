<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css"/>
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">
    <link rel="stylesheet" href="/css/episodes.css">
    <link rel="stylesheet" href="/css/nox.css">
    <title>Document</title>
</head>
<body>
    @include('telfazy.navbar2')

    <section>

        <div class="infos">

            <div class="part1">
                <div class="movie_image">
                     <img src="{{ asset('image1/'.$season->photo_season) }}" alt="">
                </div>
                <div class="eng">
                    <h1>{{$season->season_name}}</h1>

                    <div class="cat">
                      <span>Category : @foreach($season->serie->genres as $genre)
                        </span><h4>{{ $genre->genre }}</h4>
                       @endforeach
                    </div>

                    <div class="cra">
                        <span>Creator : </span><h4> {{ $season->serie->name_producer }}</h4>
                    </div>


                    <div class="date">
                        <span>Date release : </span><h4> {{ $season->serie->date_release }}</h4>
                    </div>


                    <div class="imdb">
                        <span>IMDB :</span><h4> {{ $season->serie->imdb }}</h4>
                    </div>


                </div>

            </div>

            <div class="part2">
                <div class="arb">

                    <div class="lan">
                    <span>اللغة :</span><h4> {{ $season->serie->language }}</h4>
                    </div>
                    <div class="con">
                        <span>الدولة :</span><h4> {{ $season->serie->country }} </h4>
                    </div>
                    <div class="sto">
                    <span> القصة :</span><h4> {{ $season->serie->description }}</h4>
                </div>
                </div>
            </div>

        </div>



<div class="adb">
   <span><p>{{ $season->serie->serie_name }}</p></span>
</div>
<div class="adb1">
    <p> {{$season->season_name}} </p>
</div>
<div id="Seasons">

    <ul>
       <li class="Uls"><label>▾ المواسم  </label>
          <ul>
            @foreach ($seasons as $season)
             <li><a href="{{ route('showepisodetelfazy', $season->id) }}">{{$season->season_name}}</a></li>
             @endforeach

          </ul>
       </li>
    </ul>
 </div>
<div class="second-section">


<div class="big-div">

    <div class="div1">

        <img src="{{ asset('image3/' .$season->serie->photo_actor1) }}" alt="">
        <div class="actors">

        <h5>{{ $season->serie->name_actor1 }}</h5>
        <h5><span>{{ $season->serie->real_name_actor1 }}</span></h5>
        </div>


    </div>

    <div class="div2">

        <img src="{{ asset('image4/' .$season->serie->photo_actor2) }}" alt="">

          <div class="actors">

        <h5>{{ $season->serie->name_actor2 }}</h5>
        <h5><span>{{ $season->serie->real_name_actor2 }}</span></h5>
        </div>

    </div>

    <div class="div3">

        <img src="{{ asset('image5/' .$season->serie->photo_actor3) }}" alt="">
        <div class="actors">

        <h5>{{ $season->serie->name_actor3 }}</h5>
        <h5><span>{{ $season->serie->real_name_actor3 }}</span></h5>
        </div>

    </div>

</div>

<div class="videos">


    <iframe width="1220" height="440" src="https://www.youtube.com/embed/qehr5WUfJUk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
{{-- <div class="main">
    <div class="slider slider-nav">
@foreach ($seasons as $season)
<div class="part"> <h6>{{$season->season_name}}</h6><a href="{{ route('showepisodetelfazy', $season->id) }}"><img src="{{ asset('image1/' .$season->photo_season) }}" alt=""></a></div>
@endforeach
    </div>
  </div> --}}





  <div class="vertical-menu">

    @foreach ($episodes as $episode)
    <a href="{{ route('myepisode', $episode->id) }}">{{ $episode->episode_name }}</a>
    @endforeach

  </div>
    </section>


    @include('telfazy/footer')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
<script>

$('.slider-for').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
fade: true,
asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
slidesToShow: 3,
slidesToScroll: 1,
asNavFor: '.slider-for',
dots: true,
centerMode: true,
focusOnSelect: true
});
</script>
</body>
</html>


       {{-- <a href="{{ route('showep', $episodes->id) }}">{{ $episodes->episode_name }}</a> --}}
