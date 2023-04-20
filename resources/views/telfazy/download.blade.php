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
<style>

table, th, td {
           /* margin-top: 10px; */
    border: 0.2rem solid #FEC107;
    /* background: rgba(0, 0, 0, 0.7); */
    width: 380px;
    margin-top: 16px;
    height: 85px;
    /* background: grey; */
    margin-left: 184px;
}
.right{
  text-align: center;
}
.center{
  text-align: center;
}
.mycontent{
    background: rgba(0, 0, 0, 0.7);
    position: relative;
    display: flex;
    flex-wrap: wrap;
    width: 99%;
    margin-top: 5px;
    height: 40%;
    margin-left: 10px;
    justify-content: center;
}

.man{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem; 
}
#downc:hover{
  color:red;
  cursor: pointer;
}
.mypost{
    border:  0.2rem solid #FEC107;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 4px;
    padding: 5px;
    width: 220px;
    position: relative;
    left: 90px;
    top: 5px;
    margin-top: 10px;
    margin-bottom: 19px;
}
.sentence{
  text-align: center;
    font-family: 'Lemonada';
    font-size: 3rem;
    color: #FEC107;
    padding: 15px;
    /* color: #fff; */
    width: 98.9%;
    /* margin-right: 31px; */
    margin-left: 10px;
    margin-top: -4px;
    background: rgba(0, 0, 0, 0.7);
}

</style>
<body>
@include('telfazy.navbar3')

  <div class="sentence">
    <p>Hello every one</p>
  </div>
<div class="mycontent">
    <img src="{{ $episode->season->serie->serie_photo }}" class="mypost" id="f1" alt="">
   
        <table id="f2">
  <tr>
    <th class="center" style="font-size:2.5rem;" >Quality</th>
    <th class="right" style="font-size:2rem;" >روابط تحميل  </th>
   
  </tr>
  <tr>
    <td class="center">1080 P</td>
    <td class="right" id="downc">تحميل </td>
   
  </tr>
  <tr>
    <td class="center">720 P</td>
     <td class="right"id="downc">تحميل </td>
   
  </tr>
  <tr>
    <td class="center">480 P</td>
     <td class="right"id="downc">تحميل </td>
   
  </tr>
  
</table>
    
</div>

</section>
<div class="man">
  @include('telfazy/footer')
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/loading.js"></script>
</body>
</html>


{{-- <a href="{{ route('showep', $episodes->id) }}">{{ $episodes->episode_name }}</a> --}}
