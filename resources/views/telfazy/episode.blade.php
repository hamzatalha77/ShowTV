@if( $episode->status == 1)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/images/favLogo.png" type="image/x-icon"/>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css"/>
    <script src="https://w.egydead.live/wp-content/themes/04-07-2021/Interface/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">
    <link rel="stylesheet" href="/css/episode.css">

    <title>Telfazy | {{ $episode->season->season_name}} {{ $episode->episode_name }}  {{ $episode->season->serie->serie_name }} مسلسل </title>
</head>
<body onload="myFunction()">
    @include('telfazy.loading')
    @include('telfazy.navbar3')

    <section>

        {{-- <div class="infos">

            <div class="part1">
                <div class="movie_image">
                     <img src="{{ $episode->season->photo_season }}" alt="">
                </div>

                <div class="eng">
                    <div class="themoviename">
                    <h1>{{$episode->season->season_name}}</h1>
                 </div>
                <div class="cat">
                    <span>Category : @foreach($episode->season->serie->genres as $genre)
                      </span><h4>{{ $genre->genre }}</h4>
                     @endforeach
                  </div>

                    <div class="cra">
                        <span>Creator : </span><h4> {{ $episode->season->serie->name_producer }}</h4>
                    </div>


                    <div class="date">
                        <span>Date release : </span><h4> {{  $episode->season->serie->date_release }}</h4>
                    </div>


                    <div class="imdb">
                        <span>IMDB :</span><h4> {{  $episode->season->serie->imdb }}</h4>
                    </div>


                    <div class="dura">
                        <span>Duration :</span><h4>{{  $episode->duration }}</h4>
                    </div>

                    <div class="qua">
                         <span>Qyality :</span><h4> {{  $episode->quality }}</h4>
                    </div>

                </div>

            </div>

            <div class="part2">
                <div class="arb">

                    <div class="lan">
                    <span>اللغة :</span><h4> {{  $episode->season->serie->language }}</h4>
                    </div>
                    <div class="con">
                        <span>الدولة :</span><h4> {{  $episode->season->serie->country }} </h4>
                    </div>
                    <div class="sto">
                    <span> القصة :</span><h4> {{  $episode->season->serie->description }}</h4>
                </div>
                </div>
            </div>

        </div> --}}

        <div class="adb">
            <span><p>{{  $episode->season->serie->serie_name }}</p></span>
            </div>

    <div class="adb1">
<label class="titles"> {{ $episode->season->season_name}} {{ $episode->episode_name }}</label>
    <div class="main">

                <input type="checkbox" id="drop-1" hidden>
                <label class="dropHeader dropHeader-1" for="drop-1">▼ المواسم</label>
                <div class="list list-1">
                    @foreach ($seasons as $season)
                <div class="item"><a href="{{ route('showepisodetelfazy', $season->id) }}">{{$season->season_name}}</a></div>
                     @endforeach

                </div>
            </div>
    </div>
    @if($episode->season->serie->special == 0)

    <div class="watching">
        <div class="streaming">
            <div class="boxx1">
                    {{-- <a class="link-server" data-link="//www.youtube.com/embed/jZutzZ1OCUc">مشاهدة التريلر</a> --}}
                    <a class="link-server" data-link="{{$episode->server_1}}"> سيرفر المشاهدة 1</a>
                    <a class="link-server" data-link="{{$episode->server_2}}"> سيرفر المشاهدة 2</a>
                    <a class="link-server" data-link="{{$episode->server_3}}"> سيرفر المشاهدة 3</a>
                    <a class="link-server" data-link="{{$episode->server_4}}">تحميل سيرفر 1</a>
                    <a class="link-server" href="#">تحميل سيرفر 2</a>
                    <a class="link-server" href="#">تحميل سيرفر 3</a>
            </div>
            <div class="boxx2">
                <div class="my-watch">

                        <iframe src=""width="100%" height="460" frameborder="0" scrolling="auto" title="La Casa De Papel   Parte 5 Vol. 1   Tráiler Oficial   Netflix" style="position:absolute;" allowfullscreen></iframe>

            </div>
            </div>


            <div class="boxx3">


                @foreach ($episodes as $episode)
                <a href="{{ route('myepisode', $episode['id']) }}" id="{{$episode['id']}}">{{ $episode->episode_name }}</a>
                @endforeach


                </div>

        </div>
    </div>
@else
    <div class="watching">
        <div class="streaming">
            <div class="boxx1">
                    {{-- <a class="link-server" data-link="//www.youtube.com/embed/jZutzZ1OCUc">مشاهدة التريلر</a> --}}
                    <a class="link-server" data-link="{{$episode->server_1}}"> سيرفر المشاهدة 1</a>
                    <a class="link-server" data-link="{{$episode->server_2}}"> سيرفر المشاهدة 2</a>
                    <a class="link-server" data-link="{{$episode->server_3}}"> سيرفر المشاهدة 3</a>
                    <a class="link-server" data-link="{{$episode->server_4}}">تحميل سيرفر 1</a>
                    <a class="link-server" href="{{ route('download', $episode->id) }} }}">تحميل سيرفر 2</a>
                    <a class="link-server" href="#">تحميل سيرفر 3</a>
            </div>
            <div class="boxx2">
                <div class="my-watch">

                        <iframe src=""width="100%" height="460" frameborder="0" scrolling="auto" title="La Casa De Papel   Parte 5 Vol. 1   Tráiler Oficial   Netflix" style="position:absolute;" allowfullscreen></iframe>

            </div>
            </div>


            <div class="boxx3">


                @foreach ($episodes as $episode)
                <a href="{{ route('myepisode', $episode['id']) }}" id="{{$episode['id']}}">{{ $episode->episode_name }}</a>
                @endforeach


                </div>

        </div>
    </div>

@endif









    </section>
    @include('telfazy/footer')
<script>
function myFunction(){
    var url = window.location.pathname;
    var url_array = url.split('/');
    var last_segment = "{{ $a }}";
    //document.getElementByID(last_segment).style.backgroundColor = "green";
    document.getElementById(last_segment).style.backgroundColor = 'black' ;
    document.getElementById(last_segment).style.color = '#FEC107' ;
}
</script>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/loading.js"></script>
</body>
</html>
@else
    {{-- @include('telfazy.loading') --}}
    <?php  abort(404, "website not found") ?>
@endif


       {{-- <a href="{{ route('showep', $episodes->id) }}">{{ $episodes->episode_name }}</a> --}}
