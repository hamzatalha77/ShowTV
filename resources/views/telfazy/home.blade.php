<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telfazy</title>
    <link rel="icon" href="/images/favLogo.png" type="image/x-icon"/>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="/js/strip.js"></script>
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script type="text/javascript"src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/css/strip.css">
 <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/apps.css">
  </head>
  <body>
      <style>
          body{
            padding-top: 0px;
          }
      </style>
    @include('telfazy.loading')
    @include('telfazy.navbar2')

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

 @foreach ($messages as $message)
            <div class="swiper-slide" style="padding: 10px">

                  <div class="section">
                      <div class="hero-slide-item">
                          <img src="{{ $message->image_message }}" alt="">
                          <div class="overlay"></div>
                          <div class="hero-slide-item-content">
                              <div class="item-content-wraper">
                                  <div class="item-content-title">
                                      {{ $message->name }}
                                  </div>
                                  <div class="movie-infos">
                                      <div class="movie-info">
                                          <i class="bx bxs-star"></i>
                                          <span>{{ $message->imdb }}</span>
                                      </div>
                                      <div class="movie-info">
                                          <i class="bx bxs-time"></i>
                                          <span>{{ $message->duration }}</span>
                                      </div>
                                      <div class="movie-info">
                                          <span>{{ $message->quality }}</span>
                                      </div>
                                      <div class="movie-info">
                                          <span>{{ $message->language }}</span>
                                      </div>
                                      <div class="movie-info">
                                          <span>{{ $message->category }}</span>
                                      </div>

                                  </div>
                                  <div class="item-content-description">
                                      {{ $message->description }}
                                  </div>
                                  <div class="item-action">
                                      @if ($message->link==!null)
                                          <a href="{{ $message->link }}" class="btns btn-hover">
                                          <i class="bx bxs-right-arrow"></i>
                                          <span>شاهد الان </span>
                                      </a>
                                      @else
                                      <div class="btns btn-hover" style="cursor: context-menu">
                                        <i class="fas fa-hourglass-start"></i>
                                      <span>قريبا </span>
                                      </div>
                                      @endif
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
      @endforeach


        </div>
        <div class="swiper-pagination"></div>
      </div>

    <!-- Wrapper -->
    <div class="wrapper noselect">


              <span><a href="{{ route('newmovies') }}">أحدث الأفلام</a></span>
              <div class="strip-carousel" id="mostviewed">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">
                 @foreach ($newmovie as $movie)
                 <a href="{{ route('details', $movie->id) }}">
                   <div class="frame">
                    <div class="card-container">
                        <img src="{{ $movie->image_poster_movie }}">
                     <div class="overlays">
                         <p> {{ $movie->movie_name }}</p>
                    </div>
                    </div>
                    </div>

                  </a>
                 @endforeach
                </div>

              </div>

              <!-- Strip Carousel (Top Ten) -->
              <span><a href="{{ route('newseries') }}">أحدث المسلسلات</a></span>
              <div class="strip-carousel" id="topten">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">

                    @foreach ($newserie as $serie)
                 <a href="{{ route('showserie', $serie->id) }}">
                   <div class="frame">
                    <div class="card-container">
                        <img src="{{$serie->image_poster_serie }}">
                     <div class="overlays">
                         <p> {{ $serie->serie_name }}</p>
                    </div>
                    </div>
                    </div>

                  </a>
                 @endforeach

                </div>
              </div>
              <span><a href="{{ route('newanimes') }}">أحدث الانمي</a></span>
              <div class="strip-carousel" id="topten1">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">
                    @foreach ($newanimeserie as $anime)
                    <a href="{{ route('showanime', $anime->id) }}">
                      <div class="frame">
                       <div class="card-container">
                           <img src="{{$anime->poster_anime }}">
                        <div class="overlays">
                            <p> {{ $anime->anime_name }}</p>
                       </div>
                       </div>
                       </div>

                     </a>
                    @endforeach
                </div>
              </div>
              <span><a href="{{ route('newanimemovies') }}">أحدث الأفلام الانمي</a></span>
              <div class="strip-carousel" id="topten2">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">
                    @foreach ($newanimemovie as $movie)
                    <a href="{{ route('details', $movie->id) }}">
                      <div class="frame">
                       <div class="card-container">
                           <img src="{{$movie->image_poster_movie }}">
                        <div class="overlays">
                            <p> {{ $movie->movie_name }}</p>
                       </div>
                       </div>
                       </div>

                     </a>
                    @endforeach
                </div>
              </div>
              <span><a href="{{ route('topmovies') }}">افضل الافلام</a></span>
              <div class="strip-carousel" id="topten3">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">
                    @foreach ($topmovie as $movie)
                    <a href="{{ route('details', $movie->id) }}">
                      <div class="frame">
                       <div class="card-container">
                           <img src="{{$movie->image_poster_movie }}">
                        <div class="overlays">
                            <p> {{ $movie->movie_name }}</p>
                       </div>
                       </div>
                       </div>

                     </a>
                    @endforeach
                </div>
              </div>
              <span><a href="{{ route('topanimes') }}">افضل الانمي</a></span>
              <div class="strip-carousel" id="topten4">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">
                    @foreach ($topanime as $anime)
                    <a href="{{ route('showanime', $anime->id) }}">
                      <div class="frame">
                       <div class="card-container">
                           <img src="{{$anime->poster_anime }}">
                        <div class="overlays">
                            <p> {{ $anime->anime_name }}</p>
                       </div>
                       </div>
                       </div>

                     </a>
                    @endforeach
                </div>
              </div>
              <span><a href="{{ route('topseries') }}">أفضل المسلسلات</a></span>
              <div class="strip-carousel" id="topten5">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">
                    @foreach ($topserie as $serie)
                    <a href="{{ route('showserie', $serie->id) }}">
                        <div class="frame">
                         <div class="card-container">
                             <img src="{{$serie->image_poster_serie }}">
                          <div class="overlays">
                              <p> {{ $serie->serie_name }}</p>
                       </div>
                       </div>
                       </div>

                     </a>
                    @endforeach
                </div>
              </div>

            </div>

@include('telfazy/footer')

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
      });
</script>
<script src="/js/loading.js"></script>
</body>
</html>


