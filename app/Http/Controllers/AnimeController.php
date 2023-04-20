<?php

namespace App\Http\Controllers;

use App\Models\anime;
use App\Models\type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Serie;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes=anime::all();

        return view('animes.allanime')->with('animes',$animes);
    }



    public function disabel()
    {
        $animes = DB::select("UPDATE animes SET `special`=0");

        return redirect(route('animes.index'));
    }

    public function enable()
    {
        $animes = DB::select("UPDATE animes SET `special`=1");
        return redirect(route('animes.index'));
    }
    public function allanimes()
    {
        $serieclass = Serie::distinct()->get('class_serie');
        $class2 = Movie::distinct()->get('class');
        $animes=anime::Paginate(6);
        $date_release = anime::distinct()->get('date_release');
        $language = anime::distinct()->get('language');
        $type = type::whereHas('animes')->get();
        return view('telfazy.anime search1')->with('animes',$animes)->with('date_release',$date_release)->with('language',$language)->with('type',$type)->with('serieclass',$serieclass)->with('class2',$class2);
    }





    public function searchanime(Request $request){
        $serieclass2 = Serie::distinct()->get('class_serie');
        $builder = anime::query();
        $class2 = Movie::distinct()->get('class');
        $a = $request->type;
            if(!empty($request->type)){
                $builder->whereHas('types', function($query) use ($a){
                    $query->where('type', $a);
                });

            }
            if(!empty($request->language)){
                $builder->where('language','=',$request->language);
            }
            if(!empty($request->date_release)){
                $builder->where('date_release','=',$request->date_release);
            }

            $date_release = anime::distinct()->get('date_release');
            $language = anime::distinct()->get('language');
            $type = type::whereHas('animes')->get();

            $result = $builder->Paginate(6);

            return view('telfazy.anime search2', compact('class2','result','date_release','language','type','serieclass2'));

    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = type::all();
        return view('animes.addanime',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anime=anime::create([
            'anime_name'=>$request->anime_name,
            'tags'=>$request->tags,
            'date_release'=>$request->date_release,
            'description'=>$request->description,
            'age_classification'=>$request->age_classification,
            'country'=>$request->country,
            'imdb'=>$request->imdb,
            'views'=>$request->views,
            'image_anime'=>$request->image_anime,
            'name_producer'=>$request->name_producer,
            'poster_anime'=>$request->poster_anime,
            'youtube_link'=>$request->youtube_link,
            'language'=>$request->language,
            'user_name'=>auth()->user()->name,
        ]);
        $anime->types()->attach($request->types_id);
        Session::flash('animeadded');
        return redirect(route('animes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $animes = anime::where('id',$id)->first();
        // return view('animes.allanime')->with('animes',$animes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anime = anime::find($id);
        return view('animes.editanime')->with('anime',$anime);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $anime = anime::find($id);
        $anime->anime_name=$request->anime_name;
        $anime->tags=$request->tags;
        $anime->date_release=$request->date_release;
        $anime->description=$request->description;
        $anime->age_classification=$request->age_classification;
        $anime->country=$request->country;
        $anime->imdb=$request->imdb;
        $anime->image_anime=$request->image_anime;
        $anime->poster_anime=$request->poster_anime;
        $anime->name_producer=$request->name_producer;
        $anime->youtube_link=$request->youtube_link;
        $anime->language=$request->language;
        $anime->save();
        $anime->types()->sync($request->types_id);
        Session::flash('animeupdated');
        return redirect(route('animes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anime = anime::find($id);
        $anime->delete();
        Session::flash('animedeleted');
        return redirect()->route('animes.index');
    }

    public function changeStatusAnime(Request $request)
    {
        $anime = anime::find($request->anime_id);
        $anime->status = $request->status;
        $anime->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function changeTopAnime(Request $request)
    {
        $anime = anime::find($request->anime_id);
        $anime->top = $request->top;
        $anime->save();
        return response()->json(['success'=>'Status change successfully.']);
    }


}
