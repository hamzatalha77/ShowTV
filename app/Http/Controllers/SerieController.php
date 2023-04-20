<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Genre;
use App\Models\Season;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::with('genres')->get();
        return view('series.allseries', compact('series'));
    }
    public function disabel()
    {
        $series = DB::select("UPDATE series SET `special`=0");

         return redirect(route('series.index'));
    }

    public function enable()
    {
        $series = DB::select("UPDATE series SET `special`=1");

         return redirect(route('series.index'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatusSerie(Request $request)
    {
        $serie = Serie::find($request->serie_id);
        $serie->status = $request->status;
        $serie->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
    public function changeStatusSeason(Request $request)
    {
        $season = Season::find($request->season_id);
        $season->status = $request->status;
        $season->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
    public function changeStatusEpisode(Request $request)
    {
        $episode = Episode::find($request->episode_id);
        $episode->status = $request->status;
        $episode->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
    public function create()
    {
        $genres = Genre::all();
        $season = Season::all();
        //return view('series.allseries');
        return view('series.addserie',compact('season','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addserie(Request $request)
    {
        $serie = new Serie;
        $serie->serie_name = $request->input('serie_name');
        $serie->description = $request->input('description');
        $serie->age_classification = $request->input('age_classification');
        $serie->class_serie = $request->input('class_serie');
        $serie->language = $request->input('language');
        $serie->imdb = $request->input('imdb');
        $serie->user_name = $request->input('user_name');
        $serie->country = $request->input('country');
        $serie->youtube_link = $request->input('youtube_link');
        $serie->tags = $request->input('tags');
        $serie->views = $request->input('views');
        $serie->name_producer = $request->input('name_producer');
        $serie->real_name_actor1 = $request->input('real_name_actor1');
        $serie->real_name_actor2 = $request->input('real_name_actor2');
        $serie->real_name_actor3 = $request->input('real_name_actor3');
        $serie->name_actor1 = $request->input('name_actor1');
        $serie->name_actor2 = $request->input('name_actor2');
        $serie->name_actor3 = $request->input('name_actor3');
        $serie->date_release = $request->input('date_release');
        $serie->serie_photo = $request->input('serie_photo');
        $serie->photo_productor = $request->input('photo_productor');
        $serie->photo_actor1 = $request->input('photo_actor1');
        $serie->photo_actor2 = $request->input('photo_actor2');
        $serie->photo_actor3 = $request->input('photo_actor3');
        $serie->image_poster_serie = $request->input('image_poster_serie');
        $serie->save();
        $serie->genres()->attach($request->genres_id);
        Session::flash('serieadded');
        return redirect(route('series.show',$serie));
    }

    public function newseason(Request $request, $id)
    {
        $serie = Serie::find($id);
        $season = new Season;
        $season->season_name = $request->input('season_name');
        $season->user_name = $request->input('user_name');
        $season->youtube_link = $request->input('youtube_link');
        $season->views = $request->input('views');
        $season->serie_id = $serie->id;
        $season->number = $request->input('number');
        $season->photo_season = $request->input('photo_season');
        //$serie = Serie::find(1);
       // $season->series()->associate($serie);

       $season->save();
       Session::flash('seasonadded');
       return redirect(route('showseasons',$serie->id));
    }

    public function addepisode(Request $request, $id)
    {
        $season = Season::find($id);
        $episode = new Episode;
        $episode->episode_name = $request->input('episode_name');
        $episode->user_name = $request->input('user_name');
        $episode->quality = $request->input('quality');
        $episode->server_1 = $request->input('server_1');
        $episode->server_2 = $request->input('server_2');
        $episode->server_3 = $request->input('server_3');
        $episode->server_4 = $request->input('server_4');
        $episode->server_5 = $request->input('server_5');
        $episode->server_6 = $request->input('server_6');
        $episode->views = $request->input('views');
        $episode->download_link_1 = $request->input('download_link_1');
        $episode->download_link_2 = $request->input('download_link_2');
        $episode->download_link_3 = $request->input('download_link_3');
        $episode->imdb_episode = $request->input('imdb_episode');
        $episode->duration = $request->input('duration');
        $episode->season_id = $season->id;


        //$serie = Serie::find(1);
       // $season->series()->associate($serie);

        $episode->save();
        Session::flash('episodeadded');
        return redirect(route('showepisodes',$season->id));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $series = Serie::with('genres')->get();
        return view('series.allseries', compact('series'));
    }



    public function showseasons($id)
    {
        $serie = Serie::findOrFail($id);
        $seasons = Season::where('serie_id',$serie->id)->get();
        return view('series.allseasons', compact('serie','seasons'));
    }


    public function showepisodes($id)
    {
        $season = Season::findOrFail($id);
        $episodes = Episode::where('season_id',$season->id)->get();
        return view('series.allepisodes', compact('season','episodes'));
    }


    public function showepisode($id)
    {

       // $season_id = Episode::where('season_id');



        $season = Episode::where('id',$id)->first();
        $season_id = $season->season_id;

        $serie = Season::where('id',$season_id)->first();
        $serie_id = $serie->serie_id;

        $allseason = Season::where('serie_id',$serie_id)->get();
        $allepisodes = Episode::where('season_id', $season_id)->get();
        //dd($allseason);
        // $season = Episode::where('id',$id)->first();
        // $season_id = $episode->episode_id;
        // $allepisode = DB::table('episodes')
        // ->Join('seasons', 'season_id', '=', 'id')
        // ->select('episode_name')
        // ->where('serie_id',  '=' ,$serie_id)
        // ->get();

        //$data = DB::select("SELECT episode_name FROM episodes JOIN seasons ON (seasons.id = episodes.season_id) WHERE (seasons.serie_id = $serie_id)");








        $episode = Episode::findOrFail($id);
       // $episodes = Episode::where('id',$season->id);
        return view('series.episode', compact('episode','allseason','allepisodes'));

    }

    // public function showseasons(serie $serie)
    // {
    //     $seasons = Season::all();
    //     return view('series.allseasons', compact('seasons'));
    // }



    public function addseason($id)
    {
        $serie = Serie::findOrFail($id);
        return view('series.addseason', compact('serie'));
    }


    public function addepisodes($id)
    {
        $serie = Serie::find($id);
        $season = Season::findOrFail($id);
        return view('series.addepisode', compact('season','serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function editserie($id)
    {
        $serie = Serie::find($id);
        return view('series.editserie',compact('serie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function updateserie(Request $request, $id)
    {
        $serie = Serie::find($id);
        $serie->serie_name = $request->input('serie_name');
        $serie->description = $request->input('description');
        $serie->age_classification = $request->input('age_classification');
        $serie->class_serie = $request->input('class_serie');
        $serie->language = $request->input('language');
        $serie->imdb = $request->input('imdb');
        $serie->user_name = $request->input('user_name');
        $serie->country = $request->input('country');
        $serie->youtube_link = $request->input('youtube_link');
        $serie->tags = $request->input('tags');
        $serie->name_producer = $request->input('name_producer');
        $serie->real_name_actor1 = $request->input('real_name_actor1');
        $serie->real_name_actor2 = $request->input('real_name_actor2');
        $serie->real_name_actor3 = $request->input('real_name_actor3');
        $serie->name_actor1 = $request->input('name_actor1');
        $serie->name_actor2 = $request->input('name_actor2');
        $serie->name_actor3 = $request->input('name_actor3');
        $serie->date_release = $request->input('date_release');
        $serie->serie_photo = $request->input('serie_photo');
        $serie->photo_productor = $request->input('photo_productor');
        $serie->photo_actor1 = $request->input('photo_actor1');
        $serie->photo_actor2 = $request->input('photo_actor2');
        $serie->photo_actor3 = $request->input('photo_actor3');
        $serie->image_poster_serie = $request->input('image_poster_serie');
        $serie->save();
        $serie->genres()->sync($request->genres_id);

        Session::flash('serieupdated');
        return redirect(route('series.show',$serie->id));
    }
    public function editseason($id)
    {
        $season = Season::find($id);
        return view('series.editseason',compact('season'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function updateseason(Request $request, $id)
    {
        $season = Season::find($id);
        $season->season_name = $request->input('season_name');
        $season->user_name = $request->input('user_name');
        $season->youtube_link = $request->input('youtube_link');
        $season->number = $request->input('number');
        $season->photo_season = $request->input('photo_season');
        //$serie = Serie::find(1);
       // $season->series()->associate($serie);
       $season->save();
       Session::flash('seasonupdated');
       //return view('series.allseasons');
       return redirect(route('showseasons',$season->serie_id));
    }
    public function editepisode($id)
    {
        $episode = Episode::find($id);
        return view('series.editepisode',compact('episode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function updateepisode(Request $request, $id)
    {
        $episode = Episode::find($id);
        $episode->episode_name = $request->input('episode_name');
        $episode->user_name = $request->input('user_name');
        $episode->quality = $request->input('quality');
        $episode->server_1 = $request->input('server_1');
        $episode->server_2 = $request->input('server_2');
        $episode->server_3 = $request->input('server_3');
        $episode->server_4 = $request->input('server_4');
        $episode->server_5 = $request->input('server_5');
        $episode->server_6 = $request->input('server_6');
        $episode->download_link_1 = $request->input('download_link_1');
        $episode->download_link_2 = $request->input('download_link_2');
        $episode->download_link_3 = $request->input('download_link_3');
        $episode->imdb_episode = $request->input('imdb_episode');
        $episode->duration = $request->input('duration');


        //$serie = Serie::find(1);
       // $season->series()->associate($serie);

        $episode->save();
        Session::flash('episodeupdated');
        return redirect(route('showepisodes',$episode->season_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serie = Serie::find($id);
        $serie->delete();
        Session::flash('seriedeleted');
        return redirect(route('series.show',$serie->id));
    }
    public function destroy1($id)
    {
        $season = Season::find($id);
        $season->delete();
        Session::flash('seasondeleted');
        return redirect()->back();

    }
    public function destroy2($id)
    {
        $episode = Episode::find($id);
        $episode->delete();
        Session::flash('episodedeleted');
        return redirect()->back();

    }
    public function changeTopSerie(Request $request)
    {
        $serie= Serie::find($request->serie_id);
        $serie->top = $request->top;
        $serie->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
