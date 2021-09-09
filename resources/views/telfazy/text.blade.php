
   @include('telfazy.navbar')








   @foreach ($movies as $movie)
 <div class="movies">
     <div class="gallery">
         <a target="_blank" href="{{ route('details', $movie->id) }}">
           <img src="{{ asset('image1/' .$movie->image_movie) }}" style="height:172px;max-width:500px;width: expression(this.width > 500 ? 500: true);">
         <div class="desc">  {{ $movie->movie_name }}</div>
     </a>
       </div>
     </div>
     @endforeach

 @foreach ($series as $serie)
     <div class="series">
         <div class="gallery">
             <a target="_blank" href="{{ route('details', $serie->id) }}">
                 <img src="{{ asset('image1/' .$serie->serie_photo) }}" style="height:172px;max-width:500px;width: expression(this.width > 500 ? 500: true);">
                 <div class="desc">  {{ $serie->serie_name }}</div>
             </a>
         </div>
     </div>
 @endforeach

     {{ $movies->appends(['search' => request()->query('search')])->links() }}






















     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
         <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
         <link rel="stylesheet" href="/css/strip.css">
         <link rel="stylesheet" href="/css/search.css">

         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>Document</title>
     </head>
     <body>
         <style>
             .names{
                 position: relative;
                 height: 20px;
                 width: 100%;
                 background-color: rgba(0, 0, 0, 0.7);
             }
             h1{

             }
             a{
                 text-decoration: none;
             }
         </style>

         @include('telfazy.navbar2')

         <div class="container1 more">

             @foreach ($results as $result)

             <div class="colling">
     <div class="poster">

         <div title="Watch Now {{ $result->movie_name }}{{ $result->serie_name }}" class="poster__link">
             <img class="poster__img lazy"src="{{ asset('image1/' .$result->image_movie .$result->serie_photo) }}">




         </div>
     </div>
                <div class="names"><a href="{{ route('details', $result->id) }}"> {{ $result->movie_name }}</a></div>
                <div class="names"> <a href="{{ route('showserie', $result->id) }}">{{ $result->serie_name }} </a></div>
     </div>



     @endforeach
     </div>

         @include('telfazy/footer')
     </body>
     </html>




