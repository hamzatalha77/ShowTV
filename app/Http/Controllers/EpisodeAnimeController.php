<?php

namespace App\Http\Controllers;

use App\Models\Episode_anime;
use App\Models\Season_anime;
use Illuminate\Http\Request;
use App\Models\anime;
use App\Models\Serie;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class EpisodeAnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $episodes=Episode_anime::where('season_id',$id);
        // return view('')-with('episodes',$episodes);
    }
    public function allepisodeanime($id)
    {
        $season = Season_anime::where('id',$id)->first();
        $anime = anime::where('id',$season->anime_id)->first();
        $episodes = Episode_anime::where('season_id',$id)->get();
        return view('animes.allepisodeanime')->with('episodes',$episodes)->with('anime',$anime)->with('season',$season);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view()->with('id',$id);
    }

    public function addepisodeanime($id)
    {

        $season = Season_anime::where('id',$id)->first();
        $anime = anime::where('id',$season->anime_id)->first();
        return view('animes.addepisodeanime')->with('id',$id)->with('season',$season)->with('anime',$anime);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Episode_anime=Episode_anime::create([
            'season_id'=>$request->season_id,
            'episode_name'=>$request->episode_name,
            'imdb_episode'=>$request->imdb_episode,
            'duration'=>$request->duration,
            'quality'=>$request->quality,
            'views'=>$request->views,
            'server_1'=>$request->server_1,
            'server_2'=>$request->server_2,
            'server_3'=>$request->server_3,
            'server_4'=>$request->server_4,
            'server_5'=>$request->server_5,
            'server_6'=>$request->server_6,
            'download_link_1'=>$request->download_link_1,
            'download_link_2'=>$request->download_link_2,
            'download_link_3'=>$request->download_link_3,
            'user_name'=>auth()->user()->name,
        ]);
        Session::flash('episodeadded');
        return redirect(route('allepisodeanime',$request->season_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Episode_anime  $episode_anime
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');
        $episodes = Episode_anime::where('season_id',$id)->whereIn('status',[1])->get();
        $season = Season_anime::where('id',$id)->first();
        $anime = anime::where('id',$season->anime_id)->first();
        $query = DB::update("UPDATE season_animes SET views = views + 1 WHERE id = $id");
        $seasons = Season_anime::where('anime_id',$anime->id)->whereIn('status',[1])->get();
        $episode = Episode_anime::where('season_id',$season->id)->orderBy('created_at')->first();
        $a = $episode->id;
        $query2 = DB::update("UPDATE episode_animes SET views = views + 1 WHERE id = $a");
        return view('telfazy.episode anime')->with('episodes',$episodes)->with('episode',$episode)->with('season',$season)->with('class',$class)->with('serieclass',$serieclass)->with('anime',$anime)->with('seasons',$seasons)->with('a',$a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Episode_anime  $episode_anime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $episode=Episode_anime::find($id);
        return view('animes.editepiosdeanime')->with('episode',$episode);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Episode_anime  $episode_anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $episode=Episode_anime::find($id);
        $episode->episode_name=$request->episode_name;
        $episode->imdb_episode=$request->imdb_episode;
        $episode->duration=$request->duration;
        $episode->quality=$request->quality;
        $episode->server_1=$request->server_1;
        $episode->server_2=$request->server_2;
        $episode->server_3=$request->server_3;
        $episode->server_4=$request->server_4;
        $episode->server_5=$request->server_5;
        $episode->server_6=$request->server_6;
        $episode->download_link_1=$request->download_link_1;
        $episode->download_link_2=$request->download_link_2;
        $episode->download_link_3=$request->download_link_3;
        $episode->save();
        Session::flash('episodeupdated');
        return redirect(route('allepisodeanime',$episode->season_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Episode_anime  $episode_anime
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode=Episode_anime::find($id);
        $episode->delete();
        Session::flash('episodedeleted');
        return redirect(route('allepisodeanime',$episode->season_id));
    }

    public function changeStatusAnimeEpisode(Request $request)
    {
        $episode=Episode_anime::find($request->episode_id);
        $episode->status = $request->status;
        $episode->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
