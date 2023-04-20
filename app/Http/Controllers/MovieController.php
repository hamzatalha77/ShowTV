<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Episode;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $movies = Movie::with('categories')->get();
        return view('movies.allmovies',compact('movies'))->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('movies.addmovie',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->movie_name = $request->input('movie_name');
        $movie->tags = $request->input('tags');
        $movie->duration = $request->input('duration');
        $movie->description = $request->input('description');
        $movie->age_classification = $request->input('age_classification');
        $movie->quality = $request->input('quality');
        $movie->imdb = $request->input('imdb');
        $movie->country = $request->input('country');
        $movie->class = $request->input('class');
        $movie->language = $request->input('language');
        $movie->translation = $request->input('translation');
        $movie->views = $request->input('views');
        $movie->server_1 = $request->input('server_1');
        $movie->server_2 = $request->input('server_2');
        $movie->server_3 = $request->input('server_3');
        $movie->server_4 = $request->input('server_4');
        $movie->server_5 = $request->input('server_5');
        $movie->server_6 = $request->input('server_6');
        $movie->download_link_1 = $request->input('download_link_1');
        $movie->download_link_2 = $request->input('download_link_2');
        $movie->download_link_3 = $request->input('download_link_3');
        $movie->youtube_link = $request->input('youtube_link');
        $movie->date_release = $request->input('date_release');
        $movie->name_producer = $request->input('name_producer');
        $movie->name_actor1 = $request->input('name_actor1');
        $movie->name_actor2 = $request->input('name_actor2');
        $movie->name_actor3 = $request->input('name_actor3');
        $movie->real_name_actor1 = $request->input('real_name_actor1');
        $movie->real_name_actor2 = $request->input('real_name_actor2');
        $movie->real_name_actor3 = $request->input('real_name_actor3');
        $movie->user_name = $request->input('user_name');
        $movie->image_movie = $request->input('image_movie');
        $movie->photo_actor1 = $request->input('photo_actor1');
        $movie->photo_actor2 = $request->input('photo_actor2');
        $movie->photo_actor3 = $request->input('photo_actor3');
        $movie->image_poster_movie = $request->input('image_poster_movie');
        $movie->save();
        $movie->categories()->attach($request->categories_id);
        Session::flash('movieadd');
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $movies = Movie::with('categories')->get();
        return view('movies.allmovies', compact('movies'));
    }





    public function disabel()
    {
        $movies = DB::select("UPDATE movies SET `special`=0");

        return redirect(route('movies.index'));
    }

    public function enable()
    {
        $movies = DB::select("UPDATE movies SET `special`=1");
        return redirect(route('movies.index'));
    }










    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function changeStatus(Request $request)
    {
        $movie = Movie::find($request->movie_id);
        $movie->status = $request->status;
        $movie->save();

        return response()->json(['success'=>'Status change successfully.']);
    }


    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.editmovie',compact('movie'));
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
        $movie = Movie::find($id);
        $movie->movie_name = $request->input('movie_name');
        $movie->tags = $request->input('tags');
        $movie->duration = $request->input('duration');
        $movie->description = $request->input('description');
        $movie->age_classification = $request->input('age_classification');
        $movie->quality = $request->input('quality');
        $movie->imdb = $request->input('imdb');
        $movie->country = $request->input('country');
        $movie->class = $request->input('class');
        $movie->language = $request->input('language');
        $movie->translation = $request->input('translation');
        $movie->server_1 = $request->input('server_1');
        $movie->server_2 = $request->input('server_2');
        $movie->server_3 = $request->input('server_3');
        $movie->server_4 = $request->input('server_4');
        $movie->server_5 = $request->input('server_5');
        $movie->server_6 = $request->input('server_6');
        $movie->download_link_1 = $request->input('download_link_1');
        $movie->download_link_2 = $request->input('download_link_2');
        $movie->download_link_3 = $request->input('download_link_3');
        $movie->youtube_link = $request->input('youtube_link');
        $movie->date_release = $request->input('date_release');
        $movie->name_producer = $request->input('name_producer');
        $movie->real_name_actor1 = $request->input('real_name_actor1');
        $movie->real_name_actor2 = $request->input('real_name_actor2');
        $movie->real_name_actor3 = $request->input('real_name_actor3');
        $movie->name_actor1 = $request->input('name_actor1');
        $movie->name_actor2 = $request->input('name_actor2');
        $movie->name_actor3 = $request->input('name_actor3');
        $movie->image_movie = $request->input('image_movie');
        $movie->photo_actor1 = $request->input('photo_actor1');
        $movie->photo_actor2 = $request->input('photo_actor2');
        $movie->photo_actor3 = $request->input('photo_actor3');
        $movie->image_poster_movie = $request->input('image_poster_movie');
        // $movie->views = $request->input('views');
        $movie->update();
        $movie->categories()->sync($request->categories_id);
        Session::flash('movieupdate');
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        Session::flash('moviedeleted');
        return redirect()->route('movies.index');
    }


    public function changeTopMovie(Request $request)
    {
        $movie= Movie::find($request->movie_id);
        $movie->top = $request->top;
        $movie->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
