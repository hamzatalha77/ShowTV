<?php

namespace App\Http\Controllers;

use App\Models\Season_anime;
use App\Models\anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Serie;
use App\Models\Movie;
use App\Models\Episode_anime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class SeasonAnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($id)
    // {
    //     $saison= Season_anime::where('anime_id',$id);
    //     return view('')->with('saison',$saison);
    // }

    public function index2($id)
    {
        $anime = anime::where('id',$id)->first();
        $seasons = Season_anime::where('anime_id',$id)->get();
        return view('animes.allseasonanime')->with('seasons',$seasons)->with('anime',$anime);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //$anime::anime::where('id')
        return view()->with('id',$id);
    }

    public function addserieanime($id)
    {
        $anime = anime::where('id',$id)->first();
        return view('animes.addseasonanime')->with('anime',$anime);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $season_anime=Season_anime::create([
            'anime_id'=>$request->anime_id,
            'season_name'=>$request->season_name,
            'season_number'=>$request->season_number,
            'youtube_link'=>$request->youtube_link,
            'views'=>$request->views,
            'user_name'=>auth()->user()->name,
            'season_image'=>$request->season_image,
        ]);
        Session::flash('seasonadded');
        return redirect(route('allseasonanime',$request->anime_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Season_anime  $season_anime
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class = Movie::distinct()->get('class');

        $episode = Episode_anime::where('id',$id)->first();

        $season = Season_anime::where('id',$episode->season_id)->first();

        $anime = anime::where('id',$season->anime_id)->first();
        $query = DB::update("UPDATE episode_animes SET views = views + 1 WHERE id = $id");
        $seasons = Season_anime::where('anime_id',$anime->id)->whereIn('status',[1])->get();

        $episodes = Episode_anime::where('season_id', $season->id)->whereIn('status',[1])->get();
        $a = $episode->id;
        return view('telfazy.episode anime')->with('episode',$episode)->with('episodes',$episodes)->with('season',$season)->with('class',$class)->with('serieclass',$serieclass)->with('anime',$anime)->with('seasons',$seasons)->with('a',$a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Season_anime  $season_anime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $season=Season_anime::find($id);
        return view('animes.editseasonanime')->with('season',$season);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Season_anime  $season_anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $saison=Season_anime::find($id);
        $saison->season_name=$request->season_name;
        $saison->season_number=$request->season_number;
        $saison->youtube_link=$request->youtube_link;
        $saison->season_image=$request->season_image;
        $saison->save();
        Session::flash('seasonupdated');
        return redirect(route('allseasonanime',$saison->anime_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Season_anime  $season_anime
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Season_anime = Season_anime::find($id);
        $Season_anime->delete();
        Session::flash('seasondeleted');
        return redirect(route('allseasonanime',$Season_anime->anime_id));
    }

    public function changeStatusAnimeSeason(Request $request)
    {
        $Season_anime = Season_anime::find($request->season_id);
        $Season_anime->status = $request->status;
        $Season_anime->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
