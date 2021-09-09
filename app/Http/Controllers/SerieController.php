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
        //
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
        if($request->hasfile('serie_photo')){
            $file = $request->file('serie_photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image1', $filename);
            $serie->serie_photo = $filename;
        }
        if($request->hasfile('photo_productor')){
            $file = $request->file('photo_productor');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image2', $filename);
            $serie->photo_productor = $filename;
        }
        if($request->hasfile('photo_actor1')){
            $file = $request->file('photo_actor1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image3', $filename);
            $serie->photo_actor1 = $filename;
        }
        if($request->hasfile('photo_actor2')){
            $file = $request->file('photo_actor2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image4', $filename);
            $serie->photo_actor2 = $filename;
        }
        if($request->hasfile('photo_actor3')){
            $file = $request->file('photo_actor3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image5', $filename);
            $serie->photo_actor3 = $filename;
        }
        $serie->save();
        $serie->genres()->attach($request->genres_id);

        return view('series.allseries');
    }

    public function newseason(Request $request, $id)
    {
        $serie = Serie::find($id);
        $season = new Season;
        $season->season_name = $request->input('season_name');
        $season->imdb_season = $request->input('imdb_season');
        $season->user_name = $request->input('user_name');
        $season->youtube_link = $request->input('youtube_link');
        $season->serie_id = $serie->id;
        $season->number = $request->input('number');

        if($request->hasfile('photo_season')){
            $file = $request->file('photo_season');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image1', $filename);
            $season->photo_season = $filename;
        }
        //$serie = Serie::find(1);
       // $season->series()->associate($serie);

       $season->save();
       return view('series.allseries');
    }

    public function addepisode(Request $request, $id)
    {
        $season = Season::find($id);
        $episode = new Episode;
        $episode->episode_name = $request->input('episode_name');
        $episode->episode_link = $request->input('episode_link');
        $episode->user_name = $request->input('user_name');
        $episode->quality = $request->input('quality');
        $episode->download_link = $request->input('download_link');
        $episode->imdb_episode = $request->input('imdb_episode');
        $episode->duration = $request->input('duration');
        $episode->season_id = $season->id;


        //$serie = Serie::find(1);
       // $season->series()->associate($serie);

        $episode->save();
        return redirect()->back();
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

        if($request->hasfile('serie_photo')){
            $destination = 'image1'.$serie->serie_photo;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('serie_photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image1', $filename);
            $serie->serie_photo = $filename;
        }
        if($request->hasfile('photo_productor')){
            $destination = 'image2'.$serie->photo_productor;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_productor');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image2', $filename);
            $serie->photo_productor = $filename;
        }
        if($request->hasfile('photo_actor1')){
            $destination = 'image3'.$serie->photo_actor1;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_actor1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image3', $filename);
            $serie->photo_actor1 = $filename;
        }
        if($request->hasfile('photo_actor2')){
            $destination = 'image4'.$serie->photo_actor2;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_actor2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image4', $filename);
            $serie->photo_actor2 = $filename;
        }
        if($request->hasfile('photo_actor3')){
            $destination = 'image5'.$serie->photo_actor3;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_actor3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image5', $filename);
            $serie->photo_actor3 = $filename;
        }
        $serie->save();
        $serie->genres()->sync($request->genres_id);

        Session::flash('serieupdated','User Has Been updated successfully!!!!!!!!!!!!!!!!!');
        return view('series.allseries');
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
        $season->imdb_season = $request->input('imdb_season');
        $season->user_name = $request->input('user_name');
        $season->youtube_link = $request->input('youtube_link');
        $season->number = $request->input('number');

        if($request->hasfile('photo_season')){
            $destination = 'image1'.$season->photo_season;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_season');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image1', $filename);
            $season->photo_season = $filename;
        }
        //$serie = Serie::find(1);
       // $season->series()->associate($serie);
       $season->save();
       Session::flash('serieupdated','User Has Been updated successfully!!!!!!!!!!!!!!!!!');
       //return view('series.allseasons');
       return redirect()->back();
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
        $episode->episode_link = $request->input('episode_link');
        $episode->user_name = $request->input('user_name');
        $episode->quality = $request->input('quality');
        $episode->download_link = $request->input('download_link');
        $episode->imdb_episode = $request->input('imdb_episode');
        $episode->duration = $request->input('duration');


        //$serie = Serie::find(1);
       // $season->series()->associate($serie);

        $episode->save();
        return redirect()->back();
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
        Session::flash('seriedeleted','User Has Been updated successfully!!!!!!!!!!!!!!!!!');
        return view('series.allseries');
    }
    public function destroy1($id)
    {
        $season = Season::find($id);
        $season->delete();
        return redirect()->back();

    }
    public function destroy2($id)
    {
        $episode = Episode::find($id);
        $episode->delete();
        //Session::flash('episodedeleted','User Has Been updated successfully!!!!!!!!!!!!!!!!!');
        return redirect()->back();

    }
}
