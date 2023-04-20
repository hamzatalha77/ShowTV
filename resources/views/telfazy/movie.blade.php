

   @if($movie->status == 1)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">

    <script src="https://w.egydead.live/wp-content/themes/04-07-2021/Interface/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Telfazy | {{ $movie->movie_name }} فيلم </title>
</head>
{{-- <form style="" action="{{ route('updatevisitor',$movie->id) }}" method="POST">
@csrf
@method('PUT')
    <input type="text"  name="views" value="{{ $movie->views }}" id="movieVisitCount">
</form> --}}
<body>
<style>
.video-overlay {
  position: fixed;
  z-index: -1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0,0,0,0.80);
  opacity: 0;
  transition: all ease 500ms;
}

.video-overlay.open {
  position: fixed;
  z-index: 1000;
  opacity: 1;
}

.video-overlay-close {
  position: absolute;
  z-index: 1000;
  top: 15px;
  right: 20px;
  font-size: 36px;
  line-height: 1;
  font-weight: 400;
  color: #fff;
  text-decoration: none;
  cursor: pointer;
  transition: all 200ms;
}

.video-overlay-close:hover {
  color: #fa183d;
}

.video-overlay iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  /* width: 90%; */
  /* height: auto; */
  box-shadow: 0 0 15px rgba(0,0,0,0.75);
}
.button {
  background-color: #FEC107; /* Green */
  border: none;
  color: white;
  padding: 8px 16px;
  margin-top: -3px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
    /* font-size: 10px; */
}
.m2{
    margin-right: .5rem!important;
}
.xa{
        text-align: center;

}
button span{color: white;padding-left: 10px;font-size: 11px;/* margin-top: 5px; *//* padding-top: 13px; *//* line-height: 13px; */}
</style>

    @include('telfazy.loading')
    @include('telfazy.navbar3')

    <section>

        <div class="infos">

            <div class="part1">
                <div class="movie_image">
                     <img src="{{ $movie->image_movie }}" alt="">
                </div>




                <div class="eng">
                    <div class="themoviename">
                    <h1>{{ $movie->movie_name }}</h1>
                </div>
                <div class="tr">

                    <button class="button button1" id="play-video"><i class="fas fa-video m2"></i><span>Trailer</span> </button>

                    <button class="button button1"><span>{{ $movie->quality }}</span> </button>



                    <div id="video-overlay" class="video-overlay">
                    <a class="video-overlay-close">&times;</a>
                    </div>
                </div>

                    <div class="cat">
                      <span>Category : @foreach($movie->categories as $category)
                        </span><h4>{{ $category->category }}</h4>
                       @endforeach
                    </div>

                    <div class="cra">
                        <span>Creator : </span><h4> {{ $movie->name_producer }}</h4>
                    </div>


                    <div class="date">
                        <span>Date release : </span><h4> {{ $movie->date_release }}</h4>
                    </div>


                    <div class="imdb">
                        <span>IMDB :</span><h4> {{ $movie->imdb }}</h4>
                    </div>


                    <div class="dura">
                        <span>Duration :</span><h4>{{ $movie->duration }}</h4>
                    </div>

                    {{-- <div class="qua">
                         <span>Qyality :</span><h4> {{ $movie->quality }}</h4>
                    </div> --}}

                </div>

            </div>

            <div class="part2">
                <div class="arb">

                    <div class="lan">
                    <span>اللغة :</span><h4> {{ $movie->language }}</h4>
                    </div>
                    <div class="con">
                        <span>الدولة :</span><h4> {{ $movie->country }} </h4>
                    </div>
                    <div class="sto">
                    <span> القصة :</span><h4> {{ $movie->description }}</h4>
                </div>
                </div>
            </div>

        </div>

<div class="adb">
    <p>Adblock إذا لم يظهر سيرفر المشاهدة الرجاء أغلق</p>
</div>

    @if($movie->special == 0)


    <div class="watching">
        <div class="streaming">
            <div class="boxx1">
                    {{-- <a class="link-server" data-link="{{ $movie->youtube_link }}">مشاهدة التريلر</a> --}}
                    <a class="link-server" data-link="{{ $movie->server_1 }}"> سيرفر المشاهدة 1</a>
                    <a class="link-server" data-link="{{ $movie->server_2 }}"> سيرفر المشاهدة 2</a>
                    <a class="link-server" data-link="{{ $movie->server_3 }}"> سيرفر المشاهدة 3</a>
                    <a class="link-server" data-link="{{ $movie->server_4 }}"> سيرفر المشاهدة 4</a>
                    <a class="link-server" data-link="{{ $movie->server_5 }}"> سيرفر المشاهدة 5</a>


            </div>
            <div class="boxx2">
                <div class="my-watch">

                        <iframe src=""width="100%" height="460" frameborder="0" scrolling="auto" title="La Casa De Papel   Parte 5 Vol. 1   Tráiler Oficial   Netflix" style="position:absolute;" allowfullscreen></iframe>

            </div>
            </div>

            <div class="boxx4">
                {{-- https://send.cm/ktcmc56rpz37
                https://send.cm/d/5Nyz
                [URL=https://send.cm/ktcmc56rpz37]THTHL-S01E08.mp4 -  970977128[/URL]
                <IFRAME SRC="https://send.cm/video-ktcmc56rpz37" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=600 HEIGHT=300 allowfullscreen></IFRAME> --}}
            {{-- <div class="">تحميل </div> --}}
                <a class="link-server" data-link="https://ok.ru/videoembed/2480246164193">تحميل سيرفر 1</a>
                    <a class="link-server" data-link="https://cloud12.send.cm/d/a5yu26kt6gosj4l4dr2fzdnq37w2nmultcqupbnwjysyocymt5d7a44mufzsf2mixgwncreg/video.mp4">تحميل سيرفر 2</a>
                    <a class="link-server" data-link="https://dood.la/e/qt19cwknxwym">تحميل سيرفر 3</a>

                </div>

        </div>
    </div>
    @else
    <div class="watching">
        <div class="streaming">
            <div class="boxx1">
                    {{-- <a class="link-server" data-link="{{ $movie->youtube_link }}">88مشاهدة التريلر</a> --}}
                    <div class="xa">مشاهدة </div>

                    <a class="link-server" data-link="{{ $movie->server_2 }}">1080P</a>
                    <a class="link-server" data-link="{{ $movie->server_3 }}">720P</a>
                    <a class="link-server" data-link="{{ $movie->server_4 }}">480P</a>


            </div>
            <div class="boxx2">
                <div class="my-watch">

                        <iframe src=""width="100%" height="460" frameborder="0" scrolling="auto" title="La Casa De Papel   Parte 5 Vol. 1   Tráiler Oficial   Netflix" style="position:absolute;" allowfullscreen></iframe>

            </div>
            </div>

            <div class="boxx4">
                <div class="xa">تحميل </div>
                <a class="link-server" data-link="https://drive.google.com/file/d/1v0wAK_IpXSP9jTZV4i7CpS1U1abVXsCZ/preview">1080P</a>
                    <a class="link-server" data-link="https://racaty.net/embed-c2zmylvf0bi1.html">720P</a>
                    <a class="link-server" data-link="https://dood.la/e/qt19cwknxwym">480P</a>

                </div>

        </div>
    </div>
@endif



  @if($movie->class!='أفلام كرتون' and $movie->class!='أفلام انمي')
 <div class="boxx3">
    <div class="actors">
        <div class="actor">
            <div class="actor-info">
                <img src="{{ $movie->photo_actor1.'/images/persone.png' }}" alt="">
                <div class="actor-name">
                    <span><h2>{{ $movie->name_actor1 }}</h2></span>
                 <h2>{{ $movie->real_name_actor1 }}</h2>
                </div>
            </div>
        </div>
        <div class="actor">
            <div class="actor-info">
                <img src="{{ $movie->photo_actor2.'/images/persone.png' }}" alt="">
                <div class="actor-name">
                <span><h2>{{ $movie->name_actor2 }}</h2></span>
                 <h2>{{ $movie->real_name_actor2 }}</h2>
                </div>

            </div>
        </div>
        <div class="actor">
            <div class="actor-info">
                <img src="{{ $movie->photo_actor3.'/images/persone.png' }}" alt="">
                <div class="actor-name">
                    <span><h2>{{ $movie->name_actor3 }}</h2></span>
                 <h2>{{ $movie->real_name_actor3 }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endif






    </section>

    @include('telfazy.footer')

    <script type="text/javascript">
        $(document).ready(function(){
            $(".link-server:first-child").addClass('activeme');
            $(".my-watch iframe").attr('src',$('.link-server:first-child').data('link'));
            $('.link-server').click(function(){
                $(this).addClass('activeme').siblings().removeClass('activeme');
                $(".my-watch iframe").attr('src',$(this).data('link'))
            })

        })
    </script>
      <script src="/js/loading.js"></script>
<script type="text/javascript">
$('#play-video').on('click', function(e){
  e.preventDefault();
  $('#video-overlay').addClass('open');
  $("#video-overlay").append('<iframe width="560" height="315" src="{{ $movie->youtube_link }}" frameborder="0" allowfullscreen></iframe>');
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
 setTimeout(function() {
    let visitCount = document.getElementsById('movieVisitCount').value;
    let visitCountPlusOne = parseInt(visitCount) + 1;
    document.getElementById('movieVisitCount').value = visitCountPlusOne;

    $.ajax({
        url: $formVar.prop('{{ route('updatevisitor',$movie->id) }}'),
        method:'PUT',
        data: $formVar.serialize(),
    });
      }, 1000);
</script> --}}
</body>
</html>
@else
    {{-- @include('telfazy.loading') --}}
    <?php  abort(404, "website not found") ?>
@endif
