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
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">
    <link rel="stylesheet" href="/css/episodes anime.css">
    <link rel="stylesheet" href="/css/nox.css">
    <title>Telfazy |  {{ $season->season_name}}  {{ $anime->anime_name }} انمي </title>
</head>
<body>
    @include('telfazy.loading')
    @include('telfazy.navbar3')
    <section>

        <div class="infos">

            <div class="part1">
                <div class="movie_image">
                    <img src="{{$season->season_image }}" alt="">
                </div>

                <div class="eng">
                    <div class="themoviename">
                    <h1>{{ $anime->anime_name }}</h1>
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
                        <span>IMDB :</span><h4> {{ $anime->imdb }}</h4>
                    </div>
                </div>

            </div>

            <div class="part2">
                <div class="arb">

                    <div class="lan">
                    <span>اللغة :</span><h4> {{ $anime->language }}</h4>
                    </div>
                    <div class="con">
                        <span>الدولة :</span><h4>  {{ $anime->country }}  </h4>
                    </div>
                    <div class="sto">
                    <span> القصة :</span><h4> {{ $anime->description }}</h4>
                </div>
                </div>
            </div>

        </div>

<div class="adb">
    <p>Adblock إذا لم يظهر سيرفر المشاهدة الرجاء أغلق</p>
</div>
<div class="adb1">
    <label class="titles"> {{ $season->season_name}}  {{ $anime->anime_name }}</label>
        <div class="main">

                    <input type="checkbox" id="drop-1" hidden>



                    <label class="dropHeader dropHeader-1" for="drop-1">▼ المواسم</label>
                    <div class="list list-1">
                        @foreach ($seasons as $season)
                    <div class="item"><a href="{{ route('anime_episodes.show', $season->id) }}">{{$season->season_name}}</a></div>
                        @endforeach

                    </div>
                </div>
        </div>

    <div class="watching">
        <div class="streaming">
            <div class="boxx1">
                @foreach ($episodes as $episode)
                <a href="{{ route('anime_seasons.show', $episode->id) }}">{{ $episode->episode_name }}</a>
                @endforeach
            </div>
            <div class="boxx2">
                <div class="my-watch">

                        <iframe src="//www.youtube.com/embed/jZutzZ1OCUc"width="100%" height="460" frameborder="0" scrolling="auto" title="La Casa De Papel   Parte 5 Vol. 1   Tráiler Oficial   Netflix" style="position:absolute;" allowfullscreen></iframe>

            </div>
            </div>



            {{-- <div class="boxx3">
                <div class="actors">
                    <div class="actor">
                        <div class="actor-info">
                            <img src="{{ $season->serie->photo_actor1 }}" alt="">
                            <div class="actor-name">
                                <span><h2>{{ $season->serie->name_actor1 }}</h2></span>
                             <h2>{{ $season->serie->real_name_actor1 }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="actor">
                        <div class="actor-info">
                            <img src="{{ $season->serie->photo_actor2 }}" alt="">
                            <div class="actor-name">
                            <span><h2>{{ $season->serie->name_actor2 }}</h2></span>
                             <h2>{{ $season->serie->real_name_actor2 }}</h2>
                            </div>

                        </div>
                    </div>
                    <div class="actor">
                        <div class="actor-info">
                            <img src="{{ $season->serie->photo_actor3 }}" alt="">
                            <div class="actor-name">
                                <span><h2>{{ $season->serie->name_actor3 }}</h2></span>
                             <h2>{{ $season->serie->real_name_actor3 }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>











    </section>

    {{-- <section>

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




    </section> --}}




    @include('telfazy/footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/loading.js"></script>
</body>
</html>


       {{-- <a href="{{ route('showep', $episodes->id) }}">{{ $episodes->episode_name }}</a> --}}
