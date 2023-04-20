<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favLogo.png" type="image/x-icon"/>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/anime.css">
    <link rel="stylesheet" href="/css/nox.css">
    <title>Telfazy | {{ $anime->anime_name }} انمي </title>
</head>
<body>
    @include('telfazy.loading')
    @include('telfazy.navbar3')
    <section>



        <div class="infos">

            <div class="part1">
                <div class="movie_image">
                    <img src="{{ $anime->image_anime }}" alt="">
                </div>


 


                <div class="eng">
                    <div class="themoviename">
                    <h1>{{ $anime->anime_name }}</h1>
                </div>

               <div class="tr">

                    <button class="button button1" id="play-video"><i class="fas fa-video m2"></i><span>Trailer</span> </button>

                    {{-- <button class="button button1"><span>{{ $movie->quality }}</span> </button> --}}
                    <div id="video-overlay" class="video-overlay">
                    <a class="video-overlay-close">&times;</a>
                    </div>
                </div>
                
                    <div class="cat">
                        <span>Category : @foreach($anime->types as $type)
                        </span><h4>{{ $type->type }}</h4>
                       @endforeach
                    </div>

                    <div class="cra">
                        <span>Creator : </span><h4> {{ $anime->name_producer }}</h4>
                    </div>


                    <div class="date">
                        <span>Date release : </span><h4> {{ $anime->date_release }}</h4>
                    </div>


                    <div class="imdb">
                        <span>IMDB : </span><h4> {{ $anime->imdb }}</h4>
                    </div>

                </div>

            </div>

            <div class="part2">
                <div class="arb">

                    <div class="lan">
                    <span>اللغة :</span><h4> {{ $anime->language }}</h4>
                    </div>
                    <div class="con">
                        <span>الدولة :</span><h4> {{ $anime->country }} </h4>
                    </div>
                    <div class="sto">
                    <span> القصة :</span><h4> {{ $anime->description }}</h4>
                </div>
                </div>
            </div>

        </div>



<div class="adb">
    <p>المواسم </p>
</div>



<div class="carousel">
    @foreach ($seasons as $season)
    <div class="carousel-item">
      <a href="{{ route('anime_episodes.show', $season->id) }}">
      <h2 class="seasons">{{$season->season_name}}</h2>
        <img src="{{ $season->season_image }}" style="width: 178px; height: 282px;" alt="watch">
      </a>
    </div>
    @endforeach
</div>



            {{-- <div class="main">
                <div class="slider slider-nav">
            @foreach ($seasons as $season)
          <div class="part">
               <h6>{{$season->season_name}}</h6>
               <a href="{{ route('anime_episodes.show', $season->id) }}"><img src="{{ $season->season_image }}" alt=""></a>
            </div>
            @endforeach
                </div>
              </div> --}}


{{--
                    <div class="actors">
                        <div class="actor">
                            <div class="actor-info">
                                <img src="{{ $serie->photo_actor1 }}" alt="">
                                <div class="actor-name">
                                    <span><h2>{{ $serie->name_actor1 }}</h2></span>
                                <h2>{{ $serie->real_name_actor1 }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="actor">
                            <div class="actor-info">
                                <img src="{{ $serie->photo_actor2 }}" alt="">
                                <div class="actor-name">
                                <span><h2>{{ $serie->name_actor2 }}</h2></span>
                                <h2>{{ $serie->real_name_actor2 }}</h2>
                                </div>

                            </div>
                        </div>
                        <div class="actor">
                            <div class="actor-info">
                                <img src="{{ $serie->photo_actor3 }}" alt="">
                                <div class="actor-name">
                                    <span><h2>{{ $serie->name_actor3 }}</h2></span>
                                <h2>{{ $serie->real_name_actor3 }}</h2>
                                </div>
                            </div>
                        </div>
                    </div> --}}





  


    </section>




    @include('telfazy/footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- slick script cdn -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
<script type="text/javascript">
$('#play-video').on('click', function(e){
  e.preventDefault();
  $('#video-overlay').addClass('open');
  $("#video-overlay").append('<iframe width="560" height="315" src="{{ $anime->youtube_link }}" frameborder="0" allowfullscreen></iframe>');
});

$('.video-overlay, .video-overlay-close').on('click', function(e){
  e.preventDefault();
  close_video();
});

$(document).keyup(function(e){
  if(e.keyCode === 27) { close_video(); }
});

function close_video() {
  $('.video-overlay.open').removeClass('open').find('iframe').remove();
};
</script>
{{-- <script>

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
</script> --}}
<script>
    $(document).ready(function () {
  $('.carousel').slick({
    //   change prev and next button

    prevArrow:
      '<button class="slick-prev" aria-label="Previous" type="button" hidden>&lt;</button>',
    nextArrow:
      '<button class="slick-next" aria-label="Next" type="button" hidden>&gt;</button>',

    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
  });
});

</script>
<script src="/js/loading.js"></script>
</body>
</html>

            {{-- <div class="my-slider">
            <div class="carousel" data-flickity='{ "contain": true }'>
            <div class="carousel-cell"> <h5>الموسم الاول</h5><img src="/images/P11.jpg" alt=""></div>
            <div class="carousel-cell"> <h5>الموسم الثاني</h5><img src="/images/P12.jpg" alt=""></div>
            <div class="carousel-cell"> <h5>الموسم الثالث</h5><img src="/images/P13.jpg" alt=""></div>
            <div class="carousel-cell"> <h5>الموسم الرابع</h5><img src="/images/P14.jpg" alt=""></div>
            <div class="carousel-cell"> <h5>الموسم الخامس</h5><img src="/images/P15.jpg" alt=""></div>
            <div class="carousel-cell"> <h5>الموسم السادس</h5><img src="/images/P13.jpg" alt=""></div>
            <div class="carousel-cell"> <h5>الموسم السابع</h5><img src="/images/P14.jpg" alt=""></div>
            <div class="carousel-cell"> <h5>الموسم الثامن</h5><img src="/images/P15.jpg" alt=""></div>
          </div>
        </div> --}}
