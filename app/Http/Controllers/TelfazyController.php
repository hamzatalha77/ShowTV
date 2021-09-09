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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {

        $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
        $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

        $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
        $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

        $category1 = DB::table('movies')
        ->Join('category_movie', 'movie_id', '=', 'id')
        ->select('movie_name','id','image_movie','imdb')
        ->where('category_id', '=' ,$id)
        ->get();


        $categories = Category::all();
        $genres = Genre::all();
        return view('telfazy.moviewithcat',compact('categories','category1','genres','categories2','categories1','categories3','genres2','genres1','genres3'));
    }



    public function genre($id)
    {
        $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
        $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

        $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
        $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();



        $genre1 = DB::table('series')
        ->Join('genre_serie', 'serie_id', '=', 'id')
        ->select('serie_name','id','serie_photo','imdb')
        ->where('genre_id', '=' ,$id)
        ->get();

        $genres = Genre::all();
        $categories = Category::all();
        return view('telfazy.seriewithgenre',compact('categories','genres','genre1','categories2','categories1','categories3','genres2','genres1','genres3'));
    }


    public function navbar()
    {
        $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
        $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

        $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
        $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

        $genres = Genre::all();
        $categories = Category::all();
        return view('telfazy.navbar2',compact('categories','genres','genre1','categories2','categories1','categories3','genres2','genres1','genres3'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
            $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
            $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
            $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

            $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
            $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
            $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

            $series = Serie::all();
            $movies = DB::table('movies')
            ->select('*')
            ->where('status', '1')
            ->orderBy('id', 'asc')
            ->get();
            return view('telfazy.home',compact('movies','series','categories2','categories1','categories3','genres2','genres1','genres3'));

    }



    public function listmovies()
    {
            $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
            $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
            $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

            $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
            $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
            $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

            $movies = Movie::with('categories')->get();

            return view('telfazy.listmovies',compact('movies','categories2','categories1','categories3','genres2','genres1','genres3'));

    }
    public function listseries()
    {
            $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
            $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
            $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

            $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
            $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
            $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

            $series = Serie::with('genres')->get();

            return view('telfazy.listseries',compact('series','categories2','categories1','categories3','genres2','genres1','genres3'));

    }

    public function showserie($id)
    {
        $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
        $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

        $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
        $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

        $serie = Serie::findOrFail($id);
        $seasons = Season::where('serie_id',$serie->id)->orderBy('id', 'asc')->get();
        return view('telfazy.serie', compact('serie','seasons','categories2','categories1','categories3','genres2','genres1','genres3'));
    }

    public function showepisodetelfazy($id)
    {
        $serie = Season::where('id', $id)->first();
        $serie_id = $serie->serie_id;
        $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
        $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

        $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
        $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();


        $season = Season::findOrFail($id);
        $seasons = Season::where('serie_id',$serie_id)->get();
        $episodes = Episode::where('season_id',$season->id)->get();
        return view('telfazy.episodes', compact('episodes','season','seasons','categories2','categories1','categories3','genres2','genres1','genres3'));
    }




    public function myepisode($id)
    {

        $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
        $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

        $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
        $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();

        $season = Episode::where('id',$id)->first();
        $season_id = $season->season_id;

        $serie = Season::where('id',$season_id)->first();
        $serie_id = $serie->serie_id;

        $seasons = Season::where('serie_id',$serie_id)->get();
        $episodes = Episode::where('season_id', $season_id)->get();

        //dd($episodes[1]['id']);


        $episode = Episode::findOrFail($id);

        return view('telfazy.episode', compact('episode','seasons','episodes','categories2','categories1','categories3','genres2','genres1','genres3'));
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




        $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
        $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

        $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
        $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();



        $movie = Movie::all();
        $serie = Serie::all();

        $search = request()->query('search');
        /* dd(request()->query('search'));*/
        $results = Search::add(Movie::where('movie_name', 'LIKE', "%{$search}%"))
                         ->add(Serie::where('serie_name', 'LIKE', "%{$search}%"))->get();

            return view('telfazy.search',compact('results','categories2','categories1','categories3','genres2','genres1','genres3','movie','serie' ));

    }


    public function details($id)
    {
        $categories2 = Category::orderBy('id', 'asc')->limit(7)->get();
        $categories3 = DB::table('categories')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $categories1 = Category::orderBy('id', 'desc')->limit(7)->get();

        $genres2 = Genre::orderBy('id', 'asc')->limit(7)->get();
        $genres3 = DB::table('genres')->whereIn('id', array(8, 9, 10, 11, 12, 13, 14))->get();
        $genres1 = Genre::orderBy('id', 'desc')->limit(6)->get();


        $movie = Movie::findOrFail($id);
        return view('telfazy.movie', compact('movie','categories2','categories1','categories3','genres2','genres1','genres3'));
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
    {
        $movie = Movie::findOrFail($id);
        return view('telfazy.movie', compact('movie'));
    }


    public function showseries($id)
    {
        $serie = Serie::findOrFail($id);
        $seasons = Season::where('serie_id',$serie->id)->get();
        return view('telfazy.series',compact('serie','seasons'));
    }

    public function showseasons($id){

        $season = Season::findOrFail($id);
        $episodes = Episode::where('season_id',$season->id)->get();
        return view('telfazy.seasons', compact('season','episodes'));

    }
    public function showepisodes($id){


        $episodes = Episode::findOrFail($id);
        return view('telfazy.episodes', compact('episodes'));

    }
    public function showep($id){


        $episode = Episode::findOrFail($id);
        return view('telfazy.ep', compact('episode'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
