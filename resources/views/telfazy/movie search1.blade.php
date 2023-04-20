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
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/navbar2.css">
    <link rel="stylesheet" href="/css/strip.css">
    <link rel="stylesheet" href="/css/list.css">
    <link rel="stylesheet" href="/css/texting.css">
    <link rel="stylesheet" href="/css/sha.css">
    <title>Telfazy | {{ $class }}</title>
</head>
<body>
    @include('telfazy.loading')
    <section class="ftco-section" style="padding: 10px">


        <div class="container-fluid px-md-5" style="background: rgba(0, 0, 0, 0.7);">
            <div class="row justify-content-between">
                <div class="col-md-8 order-md-last">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a class="navbar-brand" href="{{ route('telfazy.index') }}"><img src="/images/logo.png" style="width: 100px;
                                height: 100px;
                                position: relative;
                                top: 1em;"></a>
                        </div>
                        <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                            <form class="searchform order-lg-last" action="{{ route('search') }}" method="GET">
                      <div class="form-group d-flex">
                        <input type="search" class="form-control pl-3" placeholder="Search" name="search" value="{{ request()->query('search') }}">
                        <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                      </div>
                    </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span><i class="fab fa-google-play"></i></span></a>
                    </p>
            </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg  ftco_navbar  ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> قائمة رئيسية
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">

                <li class="nav-item"><a href="{{ route('allanimes') }}" class="nav-link">الانمي</a></li>
                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('listmovies') }}" id="dropdown04" aria-haspopup="true" aria-expanded="false">الافلام</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">

                <div class="column">

                    @foreach ($class2 as $item)
                        <a href="{{ route('searchbytype',$item->class) }}" class="dropdown-item">{{ $item->class }} </a>
                    @endforeach

            </div>

              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('listseries') }}" id="dropdown04" aria-haspopup="true" aria-expanded="false">المسلسلات</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <div class="column">
                    @foreach ($serieclass as $item)
                    <a href="{{ route('searchbytypeserie',$item->class_serie) }}" class="dropdown-item">{{ $item->class_serie }} </a>
                     @endforeach

              </div>
              </div>
              </li>
              <li class="nav-item active"><a href="{{ route('telfazy.index') }}" class="nav-link">الرئيسية</a></li>
            </ul>
                </div>

          </div>
    </nav>

    </section>

    <form action="{{ route('looking') }}" method="GET">
<div class="advanced-search">
    <div class="container77 block-lvl">
    <div class="row77">

    <div class="col-77 col-m-5 text-col">
        <div class="any">
            {{ $class }}
        </div>
        <input name="class" value="{{ $class }}" hidden/>
      </div>
    <div class="form-ui small col-77 col-m-7 row77 gutter-small">
        <div class="col-77 col-s-6 col-m-3 dd">
            <select name="cars" id="cars">
                @foreach ($category as $data3)
                      <option value="{{ $data3->category }}"> {{ $data3->category }}</option>
                @endforeach
              </select>
        </div>
    <div class="col-77 col-s-6 col-m-3 dd">
        <select name="cars" id="cars">
            @foreach ($language as $data2)
            <option value="{{ $data2->language }}"> {{ $data2->language }}</option>
            @endforeach
          </select>
    </div>
    <div class="col-77 col-s-6 col-m-3 dd">
        <select name="cars" id="cars">
            @foreach ($date_release as $data)
            <option value="{{ $data->date_release }}"> {{ $data->date_release }}</option>
            @endforeach
          </select>
    </div>
    <div class="col-77 col-s-6 col-m-3 dd">
        <input class="btn1" type="submit" value="بحث" style="font-family: 'Lemonada', cursive;">
    </div>

    </div>

    </div>
    </div>
    </div>
</form>
{{-- <section class="section">
    <form action="{{ route('looking') }}" method="GET">
    <div class="left">
       <div id="button">
           <input class="btn1" type="submit" value="بحث" style="font-family: 'Lemonada', cursive;">
       </div>
        <div class="select">
            <select name="date_release">
                @foreach ($date_release as $data)
                     <option value="{{ $data->date_release }}"> {{ $data->date_release }}</option>
                @endforeach

            </select>
          </div>
          <div class="select">
            <select name="language">
                @foreach ($language as $data2)
                      <option value="{{ $data2->language }}"> {{ $data2->language }}</option>
                @endforeach
            </select>
          </div>
          <div class="select">
            <select name="category">
                @foreach ($category as $data3)
                      <option value="{{ $data3->category }}"> {{ $data3->category }}</option>
                @endforeach
            </select>
          </div>

    </div>
    <div class="right">
        <div class="con">
            <label>{{ $class }}</label>
            <input name="class" value="{{ $class }}" hidden/>
        </div>

    </div>
    </form>
</section> --}}

    <div class="container1 more again" style="margin-bottom: 0px; min-height: 70%;">

        @foreach ($search as $movie)

        <div class="colling">
<div class="poster">
    <a href="{{ route('details', $movie->id) }}" title="{{ $movie->movie_name }}  شاهد الان " class="poster__link">
        <img class="poster__img lazy"src="{{$movie->image_movie }}">
        <div class="poster__button">
            <i class="fas fa-play-circle fa-4x"></i>
        </div>
        <div class="poster__title">
            <span class="title">{{ $movie->movie_name }}</span>
            <div class="caption">
                @foreach($movie->categories as $category)
                <span>{{ $category->category }}</span>
                @endforeach
                <span> <i class="fas fa-star" style="color: #FEC107"></i>&nbsp;{{ $movie->imdb }}</span>
            </div>
        </div>
    </a>
</div>
</div>


@endforeach
</div>
{{ $search->links('telfazy/pagination') }}
@include('telfazy/footer')
<script type="text/javascript">
    $(document).on('click', 'ul li', function(){
        $(this).addClass('active').siblings().removeClass('active')
    })


</script>
<script src="/js/jquery.min.js"></script>
  <script src="/js/popper.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/loading.js"></script>
</script>
</body>
</html>
