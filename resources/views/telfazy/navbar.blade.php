<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarExampleOnHover">
        <!-- Left links -->
        <form action="{{ route('navbar') }}" method="GET">
        <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('allshows') }}">Telfazy</a>
          </li>
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown dropdown-hover position-static">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-mdb-toggle="dropdown" aria-expanded="false">
              Movies
            </a>
            <!-- Dropdown menu -->

            <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
                    border-top-right-radius: 0;
                  ">

              <div class="container">
                <div class="row my-4">
                  <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="list-group list-group-flush">

                        @foreach($categories2 as $category)
                        <a href="{{ route('category', $category->id) }}"class="list-group-item list-group-item-action">{{ $category->category }}</a>
                      @endforeach

                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="list-group list-group-flush">
                        @foreach($categories1 as $category)
                        <a href="{{ route('category', $category->id) }}"class="list-group-item list-group-item-action">{{ $category->category }}</a>
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <div class="list-group list-group-flush">
                        @foreach($categories3 as $category)
                        <a href="{{ route('category', $category->id) }}"class="list-group-item list-group-item-action">{{ $category->category }}</a>
                      @endforeach
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover position-static">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-mdb-toggle="dropdown" aria-expanded="false">
             Series
            </a>
            <!-- Dropdown menu -->
            <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
                    border-top-right-radius: 0;
                  ">

              <div class="container">
                <div class="row my-4">
                  <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="list-group list-group-flush">
                        @foreach($genres2 as $genre)
                        <a href="{{ route('genre', $genre->id) }}" class="list-group-item list-group-item-action">{{ $genre->genre }}</a>
                        @endforeach
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="list-group list-group-flush">
                        @foreach($genres3 as $genre)
                        <a href="{{ route('genre', $genre->id) }}" class="list-group-item list-group-item-action">{{ $genre->genre }}</a>
                        @endforeach
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <div class="list-group list-group-flush">
                        @foreach($genres1 as $genre)
                        <a href="{{ route('genre', $genre->id) }}" class="list-group-item list-group-item-action">{{ $genre->genre }}</a>
                        @endforeach
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </li>
        </ul>
       </form>
        <!-- Left links -->
        <form class="d-flex" action="{{ route('search') }}" method="GET">
            <input class="form-control me-2 typeahead" type="search" placeholder="Search" name="search" value="{{ request()->query('search') }}" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>

<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    var path = "{{ route('search') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (results) {
                return process(results);
            });
        },
        highlighter: function (item, results) {
            var parts = item.split('#'),
                html = '<div class="row">';
                html += '<div class="col-md-2">';
                html += '<img src="/image1/'+results.img+'"/ height="44px;" width="65px;">';
                html += '</div>';
                html += '<div class="col-md-10 pl-0">';
                html += '<span>'+results.name+'</span>';
                html += '</div>';
                html += '</div>';

            return html;
        }
    });
</script>
