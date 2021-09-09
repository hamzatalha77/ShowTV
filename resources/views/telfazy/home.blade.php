<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strip Carousel Template</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="/js/strip.js"></script>
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script type="text/javascript"src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/css/strip.css">
  </head>
  <body style="padding: 10px">

    @include('telfazy.navbar2')

    <div class="swiper mySwiper" style="margin-top: 10px">
        <div class="swiper-wrapper">
          <div class="swiper-slide">

              <div class="message">

                  <h1>Name of the Movie</h1>
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur beatae voluptatum consequatur quae vitae similique cum unde temporibus corporis minus.</P>
                  <div class="genres">
                     <h6>Sport</h6><h6>|Sport</h6><h6>|Sport</h6>
                  </div>
                  <div id="mybutton">
                    <a href="" class="btn69">AVAILABLE NOW</a>
                  </div>

              </div>
    <img src="/images/3640117.jpg">
            </div>
          <div class="swiper-slide">

              <div class="message">

                  <h1>Name of the Movie</h1>
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur beatae voluptatum consequatur quae vitae similique cum unde temporibus corporis minus.</P>
                  <div class="genres">
                     <h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6><h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6><h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6>
                  </div>
                  <div id="mybutton">
                    <a href="" class="btn69">AVAILABLE NOW</a>
                  </div>

              </div>
    <img src="/images/1 (4).jpg">
            </div>
          <div class="swiper-slide">

              <div class="message">

                  <h1>Name of the Movie</h1>
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur beatae voluptatum consequatur quae vitae similique cum unde temporibus corporis minus.</P>
                  <div class="genres">
                     <h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6><h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6><h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6>
                  </div>
                  <div id="mybutton">
                    <a href="" class="btn69">AVAILABLE NOW</a>
                  </div>

              </div>
    <img src="/images/1 (5).jpg">
            </div>
          <div class="swiper-slide">

              <div class="message">

                  <h1>Name of the Movie</h1>
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur beatae voluptatum consequatur quae vitae similique cum unde temporibus corporis minus.</P>
                  <div class="genres">
                     <h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6><h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;|Sport</h6><h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6>
                  </div>
                  <div id="mybutton">
                    <a href="" class="btn69">AVAILABLE NOW</a>
                  </div>

              </div>
    <img src="/images/1 (3).jpg">
            </div>
          <div class="swiper-slide">

              <div class="message">

                  <h1>Name of the Movie</h1>
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur beatae voluptatum consequatur quae vitae similique cum unde temporibus corporis minus.</P>
                  <div class="genres">
                     <h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6><h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6><h6><i class="fas fa-circle fa-xs"></i>&nbsp;&nbsp;&nbsp;Sport</h6>
                  </div>
                  <div id="mybutton">
                    <a href="" class="btn69">AVAILABLE NOW</a>
                  </div>

              </div>
    <img src="/images/1 (2).jpg">
            </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    <!-- Wrapper -->
    <div class="wrapper noselect">


              <span><a href="#">Most Viewed</a></span>
              <div class="strip-carousel" id="mostviewed">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">
                 @foreach ($movies as $movie)
                 <a href="{{ route('details', $movie->id) }}">
                   <div class="frame">
                    <div class="card-container">
                        <img src="{{ asset('image1/' .$movie->image_movie) }}">
                     <div class="overlay">
                         <p> {{ $movie->movie_name }}</p>
                    </div>
                    </div>
                    </div>

                  </a>
                 @endforeach
                </div>

              </div>

              <!-- Strip Carousel (Top Ten) -->
              <span><a href="#">Series</a></span>
              <div class="strip-carousel" id="topten">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">

                    @foreach ($series as $serie)
                 <a href="{{ route('showserie', $serie->id) }}">
                   <div class="frame">
                    <div class="card-container">
                        <img src="{{ asset('image1/' .$serie->serie_photo) }}">
                     <div class="overlay">
                         <p> {{ $serie->serie_name }}</p>
                    </div>
                    </div>
                    </div>

                  </a>
                 @endforeach

                </div>
              </div>
              <span><a href="#">Top Ten</a></span>
              <div class="strip-carousel" id="topten1">
                <div class="arrow-left">&lsaquo;</div>
                <div class="arrow-right">&rsaquo;</div>

                <div class="frames">
                  <a href="#"><div class="frame"></div></a>
                  <a href="#"><div class="frame"></div></a>
                  <a href="#"><div class="frame"></div></a>
                  <a href="#"><div class="frame"></div></a>
                  <a href="#"><div class="frame"></div></a>

                  <a href="#"><div class="frame"></div></a>
                  <a href="#"><div class="frame"></div></a>
                  <a href="#"><div class="frame"></div></a>
                  <a href="#"><div class="frame"></div></a>
                  <a href="#"><div class="frame"></div></a>
                </div>
              </div>

            </div>
@include('telfazy/footer')
  </body>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <script>
  try {
    fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
      return true;
    }).catch(function(e) {
      var carbonScript = document.createElement("script");
      carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
      carbonScript.id = "_carbonads_js";
      document.getElementById("carbon-block").appendChild(carbonScript);
    });
  } catch (error) {
    console.log(error);
  }
  </script>
  <script>
         var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
  </script>
</html>


