<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Serie;
use App\Models\Season;
use App\Models\Episode;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryModel;
use App\Models\Genre;
use App\Models\anime;
use App\Models\Episode_anime;
use App\Models\Message;
use App\Models\Season_anime;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class TelfazyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $messages = Message::all();
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        // $series = Serie::all();
        // $animes = anime::all();
        // $movies = DB::table('movies')
        // ->select('*')
        // ->where('status', '1')
        // ->orderBy('id', 'asc')
        // ->get();

        $newmovie = Movie::whereNotIn('class', ['أفلام كرتون','أفلام انمي'])->orderBy('created_at', 'desc')->whereIn('status',[1])->take(10)->get()->sortByDesc('imdb');
        // dd($newmovie);
        $newserie = Serie::orderBy('created_at', 'desc')->whereIn('status',[1])->take(10)->get()->sortByDesc('imdb');
        // dd($newserie);
        $newanimeserie = anime::orderBy('created_at', 'desc')->whereIn('status',[1])->take(10)->get()->sortByDesc('imdb');
        // dd($newanimeserie);
        $newanimemovie = Movie::whereIn('class', ['أفلام كرتون','أفلام انمي'])->orderBy('created_at', 'desc')->whereIn('status',[1])->take(10)->get()->sortByDesc('imdb');
        // dd($newanimemovie);
        $topmovie = Movie::where('top',true)->whereIn('status',[1])->get();

        $topanime = anime::where('top',true)->whereIn('status',[1])->get();

        $topserie = Serie::where('top',true)->whereIn('status',[1])->get();

        return view('telfazy.home',compact('class','serieclass','messages','newmovie','newserie' ,'newanimeserie' ,'newanimemovie','topmovie','topanime','topserie'));
    }

    public function topmovies()
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $topmovie = Movie::where('top',true)->whereIn('status',[1])->Paginate(36);
        return view('telfazy.top movie',compact('class','serieclass','topmovie'));
    }
    public function topanimes()
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class2 = Movie::distinct()->get('class');
        $topanime = anime::where('top',true)->whereIn('status',[1])->Paginate(36);
        return view('telfazy.top anime',compact('class2','serieclass','topanime'));
    }
    public function topseries()
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $topserie = Serie::where('top',true)->whereIn('status',[1])->Paginate(36);
        return view('telfazy.top serie',compact('class','serieclass','topserie'));
    }
    public function newmovies()
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $newmovie = Movie::whereNotIn('class', ['أفلام كرتون','أفلام انمي'])->orderBy('created_at', 'desc')->whereIn('status',[1])->Paginate(36);
        return view('telfazy.new movie',compact('class','serieclass','newmovie'));
    }
    public function newseries()
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $newserie = Serie::orderBy('created_at', 'desc')->whereIn('status',[1])->Paginate(36);
        return view('telfazy.new serie',compact('class','serieclass','newserie'));
    }
    public function newanimes()
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class2 = Movie::distinct()->get('class');
        $newanimeserie = anime::orderBy('created_at', 'desc')->whereIn('status',[1])->Paginate(36);
        return view('telfazy.new anime',compact('class2','serieclass','newanimeserie'));
    }
    public function newanimemovies()
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $newanimemovie = Movie::whereIn('class', ['أفلام كرتون','أفلام انمي'])->orderBy('created_at', 'desc')->whereIn('status',[1])->Paginate(36);
        return view('telfazy.new anime movie',compact('class','serieclass','newanimemovie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function updatevisitor(Request $request, $id)
    // {
    //     $movie = Movie::find($id);

    //     $visitor = $request->visitor;
    //     $movie->views = $visitor;

    //     $movie->save();
    //     return view('telfazy.movie');

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function category($id)
    // {

    //     $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
    //     $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

    //     $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
    //     $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

    //     // $category1 = DB::table('movies')
    //     // ->Join('category_movie', 'movie_id', '=', 'id')
    //     // ->select('movie_name','id','image_movie','imdb')
    //     // ->where('category_id', '=' ,$id)
    //     // ->get();


    //     $category = Category::find($id);

    //     $movies = $category->movies;



    //     return view('telfazy.moviewithcat',compact('movies','categories2','categories1','categories3','genres2','genres1','genres3'));
    // }



    // public function genre($id)
    // {
    //     $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
    //     $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

    //     $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
    //     $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();




    //     $genres = Genre::find($id);

    //     $series = $genres->series;

    //     return view('telfazy.seriewithgenre',compact('series','categories2','categories1','categories3','genres2','genres1','genres3'));
    // }


    // public function navbar()
    // {
    //     $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
    //     $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

    //     $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
    //     $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

    //     $genres = Genre::all();
    //     $categories = Category::all();
    //     return view('telfazy.navbar2',compact('categories','genres','genre1','categories2','categories1','categories3','genres2','genres1','genres3'));
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }



    public function listmovies()
    {


            $movies = Movie::with('categories')->whereIn('status',[1])->Paginate(6);
            $class = Movie::distinct()->get('class');
            $serieclass = Serie::distinct()->get('class_serie');
            return view('telfazy.listmovies',compact('class','movies','serieclass'));

    }
    public function listseries()
    {

            $class = Movie::distinct()->get('class');
            $series = Serie::with('genres')->whereIn('status',[1])->Paginate(6);
            $serieclass = Serie::distinct()->get('class_serie');
            return view('telfazy.listseries',compact('class','series','serieclass'));

    }


    public function showanime($id)
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $anime = anime::findOrFail($id);
        $query = DB::update("UPDATE animes SET views = views + 1 WHERE id = $id");
        $seasons = Season_anime::where('anime_id',$anime->id)->orderBy('id', 'asc')->whereIn('status',[1])->get();
        return view('telfazy.anime', compact('class','anime','seasons','serieclass'));
    }

    public function showserie($id)
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $serie = Serie::findOrFail($id);
        $query = DB::update("UPDATE series SET views = views + 1 WHERE id = $id");
        $seasons = Season::where('serie_id',$serie->id)->whereIn('status',[1])->orderBy('id', 'asc')->get();
        return view('telfazy.serie', compact('class','serie','seasons','serieclass'));
    }

    public function showepisodetelfazy($id)
    {
        $season = Season::where('id', $id)->first();
        $serie_id = $season->serie_id;
        // dd($serie_id);
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $query = DB::update("UPDATE seasons SET views = views + 1 WHERE id = $id");
     
        $seasons = Season::where('serie_id',$serie_id)->whereIn('status',[1])->get();
        $episodes = Episode::where('season_id',$season->id)->whereIn('status',[1])->get();
        $episode = Episode::where('season_id',$season->id)->orderBy('created_at')->first();
        $a = $episode->id;
        $query2 = DB::update("UPDATE episodes SET views = views + 1 WHERE id = $a");
        // dd($episode->id);
        return view('telfazy.episode', compact('a','episode','class','episodes','season','seasons','serieclass'));
    }
    public function myepisode($id)
    {

        $serieclass = Serie::distinct()->get('class_serie');
        $episode = Episode::where('id',$id)->first();
        $season_id = $episode->season_id;

        $season = Season::where('id',$season_id)->first();
        $serie_id = $season->serie_id;
        $query = DB::update("UPDATE episodes SET views = views + 1 WHERE id = $id");
        $seasons = Season::where('serie_id',$serie_id)->whereIn('status',[1])->get();
        $episodes = Episode::where('season_id', $season_id)->whereIn('status',[1])->get();

        //dd($episodes[1]['id']);

        $class = Movie::distinct()->get('class');

        $a = $episode->id;
        return view('telfazy.episode', compact('a','class','episode','seasons','episodes','serieclass'));
    }


    public function download($id)
    {

        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $episode  = Episode::find($id);

        return view('telfazy.download', compact('episode','class','serieclass'));
    }



    public function showepisodeanimetelfazy($id)
    {


        $season = Season_anime::where('id', $id)->first();
        $anime_id = $season->anime_id;
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');

        $seasons = Season_anime::where('anime_id',$anime_id)->get();
        $episodes = Episode_anime::where('season_id',$season->id)->get();
        $episode = Episode_anime::where('season_id',$season->id)->orderBy('created_at')->first();
        // $a = $episode->id;
        return view('telfazy.episode anime', compact('episode','class','episodes','season','seasons','serieclass'));
    }








    // public function episodetelfazy($id)
    // {

    //     $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
    //     $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

    //     $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
    //     $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();



    //     $episode = Episode::where('season_id',$season->id)->get();
    //     return view('telfazy.episode', compact('episodes','season','seasons','categories2','categories1','categories3','genres2','genres1','genres3'));
    // }






    // public function tvepisode($id)
    // {
    //     $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
    //     $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

    //     $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
    //     $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

    //     $season = Season::find($id);
    //     $seasons = Season::all();
    //     $episode = Episode::where('season_id',$season->id)->get();
    //     return view('telfazy.episodes', compact('episodes','season','seasons','categories2','categories1','categories3','genres2','genres1','genres3'));
    // }
















    public function search(Request $request){


        $serieclass = Serie::distinct()->get('class_serie');
        // $movie = Movie::all();
        // $serie = Serie::all();
        // $anime = anime::all();
        $class = Movie::distinct()->get('class');
        $search = request()->query('search');
        /* dd(request()->query('search'));*/
        $results = Search::add(Movie::where('movie_name', 'LIKE', "%{$search}%")->whereIn('status',[1]))
                         ->add(anime::where('anime_name', 'LIKE', "%{$search}%")->whereIn('status',[1]))
                         ->add(Serie::where('serie_name', 'LIKE', "%{$search}%")->whereIn('status',[1]))->paginate(6)->get();

            return view('telfazy.search',compact('class','results','serieclass'));

    }


    public function details($id)
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $movie = Movie::findOrFail($id);
        $query = DB::update("UPDATE movies SET views = views + 1 WHERE id = $id");

        return view('telfazy.movie', compact('class','movie','serieclass'));
    }
    // public function search(Request $request){

    //     $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
    //     $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

    //     $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
    //     $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
    //     $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

    //     $search = request()->query('search');
    //     $results = Search::add(Movie::select("movie_name as name","image_movie as img")->where('movie_name', 'LIKE', "%{$request->input('query')}%") ,'movie_name')
    //                      ->add(Serie::select("serie_name as name","serie_photo as img")->where('serie_name', 'LIKE', "%{$request->input('query')}%"))->get();

    //     if($results){
    //         response()->json($results);
    //     }
    //         return view('telfazy.search',compact('results','categories2','categories1','categories3','genres2','genres1','genres3' ));
    // }

    // public function autocomplete(Request $request){

    //     $data = Movie::select("movie_name as name","image_movie as img")
    //         ->where("movie_name","LIKE","%{$request->input('query')}%")
    //         ->get();

    //     return response()->json($data);

    // }


    // public function mysearch(Request $request){

    //     $data = Movie::select("movie_name as name","image_movie as img")
    //         ->where("movie_name","LIKE","%{$request->input('query')}%")
    //         ->get();

    //     return response()->json($data);

    // }

    public function directtomovie($id)
    { $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $movie = Movie::findOrFail($id);
        return view('telfazy.movie', compact('class','movie','serieclass'));
    }


    public function showseries($id)
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $serie = Serie::findOrFail($id);
        $seasons = Season::where('serie_id',$serie->id)->get();
        return view('telfazy.series',compact('class','serie','seasons','serieclass'));
    }

    public function showseasons($id){
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $season = Season::findOrFail($id);
        $episodes = Episode::where('season_id',$season->id)->get();
        return view('telfazy.seasons', compact('class','season','episodes','serieclass'));

    }
    public function showepisodes($id){

        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $episodes = Episode::findOrFail($id);
        return view('telfazy.episodes', compact('class','episodes','serieclass'));

    }



    public function searchbytype($class){

        $serieclass = Serie::distinct()->get('class_serie');

        $search = Movie::where('class', $class)->whereIn('status',[1])->Paginate(6);
        $class2 = Movie::distinct()->get('class');
        $date_release = Movie::distinct()->get('date_release');
        $language = Movie::distinct()->get('language');
        $category = Category::whereHas('movies')->get();

        return view('telfazy.movie search1', compact('class2','class','search','date_release','language','category','serieclass'));

    }
    public function Looking(Request $request){
        $serieclass = Serie::distinct()->get('class_serie');
        $builder = Movie::query();
        $class2 = Movie::distinct()->get('class');
        $a = $request->category;
            if(!empty($request->category)){
                // $builder->with(['categories' => function($q){
                //     $q->where('category', $request->category)
                // }])
                // $builder->whereHas('categories', function($q){
                //     $q->where('category','=',$request->category);
                // });
                $builder->whereHas('categories', function($query) use ($a){
                    $query->where('category', $a);
                });

            }
            if(!empty($request->language)){
                $builder->where('language','=',$request->language);
            }
            if(!empty($request->date_release)){
                $builder->where('date_release','=',$request->date_release);
            }
            if(!empty($request->class)){
                $builder->where('class','=',$request->class);
            }

            $date_release = Movie::distinct()->get('date_release');
            $language = Movie::distinct()->get('language');
            $category = Category::whereHas('movies')->get();

            $result = $builder->whereIn('status',[1])->Paginate(6);
            $class = $request->class;

            return view('telfazy.movie search2', compact('class2','result','class','date_release','language','category','serieclass'));

    }


    public function searchbytypeserie($serieclasse){

        $serieclass = Serie::distinct()->get('class_serie');

        $search = Serie::where('class_serie', $serieclasse)->whereIn('status',[1])->Paginate(6);

        $class2 = Movie::distinct()->get('class');
        $date_release = Serie::distinct()->get('date_release');
        $language = Serie::distinct()->get('language');
        $genre = Genre::whereHas('series')->get();

        return view('telfazy.serie search1', compact('class2','serieclasse','search','date_release','language','genre','serieclass'));

    }
    public function Lookingserie(Request $request){
        $serieclass = Serie::distinct()->get('class_serie');
        $builder = Serie::query();
        $class2 = Movie::distinct()->get('class');
        $a = $request->genre;
            if(!empty($request->genre)){
                $builder->whereHas('genres', function($query) use ($a){
                    $query->where('genre', $a);
                });

            }
            if(!empty($request->language)){
                $builder->where('language','=',$request->language);
            }
            if(!empty($request->date_release)){
                $builder->where('date_release','=',$request->date_release);
            }
            if(!empty($request->serieclass)){
                $builder->where('class_serie','=',$request->serieclass);
            }

            $date_release = Serie::distinct()->get('date_release');
            $language = Serie::distinct()->get('language');
            $genre = Genre::whereHas('series')->get();

            $result = $builder->whereIn('status',[1])->Paginate(6);
            $serieclass2 = $request->serieclass;

            return view('telfazy.serie search2', compact('class2','result','serieclass2','date_release','language','genre','serieclass'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function flix()
    {
        return view('telfazy.flix');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
