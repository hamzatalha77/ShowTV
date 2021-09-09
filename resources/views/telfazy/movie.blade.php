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
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Document</title>
</head>
<body>
    @include('telfazy.navbar2')

    <section>

        <div class="infos">

            <div class="part1">
                <div class="movie_image">
                     <img src="{{ asset('image1/' .$movie->image_movie) }}" alt="">
                </div>





                <div class="eng">
                    <h1>{{ $movie->movie_name }}</h1>

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

                    <div class="qua">
                         <span>Qyality :</span><h4> {{ $movie->quality }}</h4>
                    </div>

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


<div class="second-section">


<div class="big-div">

    <div class="div1">

        <img src="{{ asset('image3/' .$movie->photo_actor1) }}" alt="">
        <div class="actors">

        <h5>{{ $movie->name_actor1 }}</h5>
        <h5><span>{{ $movie->real_name_actor1 }}</span></h5>
        </div>


    </div>

    <div class="div2">

        <img src="{{ asset('image4/' .$movie->photo_actor2) }}" alt="">

          <div class="actors">

        <h5>{{ $movie->name_actor2 }}</h5>
        <h5><span>{{ $movie->real_name_actor2 }}</span></h5>
        </div>

    </div>

    <div class="div3">

        <img src="{{ asset('image5/' .$movie->photo_actor3) }}" alt="">
        <div class="actors">

        <h5>{{ $movie->name_actor3 }}</h5>
        <h5><span>{{ $movie->real_name_actor3 }}</span></h5>
        </div>

    </div>

</div>

<div class="videos">

</div>

<div id="Server">
    <div class="Trailer">مشاهدة التريلر</div>
    <div class="Server1">سيرفر المشاهدة 1</div>
    <div class="Server2">سيرفر المشاهدة 2</div>
    <div class="Download1">رابط التحميل 1</div>
    <div class="Download2">رابط التحميل 2</div>
 </div>


</div>


    </section>


    @include('telfazy/footer')
</body>
</html>
