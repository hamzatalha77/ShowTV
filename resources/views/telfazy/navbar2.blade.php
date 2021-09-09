<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/navbar.css">
<style>
    .column {
float: left;
width: 33.33%;
padding: 10px;
height: 355px;
}

.column a {
float: none;
color: black;
padding: 16px;
text-decoration: none;
display: block;
text-align: left;
}
</style>
<section class="ftco-section" style="padding: 10px">


    <div class="container-fluid px-md-5" style="background: rgba(0, 0, 0, 0.7);">
        <div class="row justify-content-between">
            <div class="col-md-8 order-md-last">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <a class="navbar-brand" href="{{ route('allshows') }}"><img src="/images/logo.png" style="width: 100px;
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
    <form action="{{ route('navbar') }}" method="GET">
    <nav class="navbar navbar-expand-lg  ftco_navbar  ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active"><a href="{{ route('allshows') }}" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ route('listmovies') }}" id="dropdown04" aria-haspopup="true" aria-expanded="false">Movies</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">

            <div class="column">

                @foreach($categories2 as $category)
                <a href="{{ route('category', $category->id) }}"class="dropdown-item">{{ $category->category }}</a>
                @endforeach
            </div>
                <div class="column">
                @foreach($categories1 as $category)
                <a href="{{ route('category', $category->id) }}"class="dropdown-item">{{ $category->category }}</a>
                @endforeach
            </div>
                <div class="column">
                @foreach($categories3 as $category)
                <a href="{{ route('category', $category->id) }}"class="dropdown-item">{{ $category->category }}</a>
                @endforeach
        </div>

          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ route('listseries') }}" id="dropdown04" aria-haspopup="true" aria-expanded="false">Series</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <div class="column">
                @foreach($genres2 as $genre)
                <a href="{{ route('genre', $genre->id) }}" class="dropdown-item">{{ $genre->genre }}</a>
                @endforeach
              </div>
              <div class="column">
                @foreach($genres3 as $genre)
                <a href="{{ route('genre', $genre->id) }}" class="dropdown-item">{{ $genre->genre }}</a>
                @endforeach
              </div>
              <div class="column">
                @foreach($genres1 as $genre)
                <a href="{{ route('genre', $genre->id) }}" class="dropdown-item">{{ $genre->genre }}</a>
                @endforeach

          </div>
          </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
       </form>
  </nav>

<!-- END nav -->

</section>
<script src="/js/jquery.min.js"></script>
  <script src="/js/popper.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
