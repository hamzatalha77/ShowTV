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
        $movie->movie_link = $request->input('movie_link');
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

        if($request->hasfile('image_movie')){
            $file = $request->file('image_movie');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image1', $filename);
            $movie->image_movie = $filename;
        }
        if($request->hasfile('photo_productor')){
            $file = $request->file('photo_productor');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image2', $filename);
            $movie->photo_productor = $filename;
        }
        if($request->hasfile('photo_actor1')){
            $file = $request->file('photo_actor1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image3', $filename);
            $movie->photo_actor1 = $filename;
        }
        if($request->hasfile('photo_actor2')){
            $file = $request->file('photo_actor2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image4', $filename);
            $movie->photo_actor2 = $filename;
        }
        if($request->hasfile('photo_actor3')){
            $file = $request->file('photo_actor3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image5', $filename);
            $movie->photo_actor3 = $filename;
        }

        $movie->save();
        $movie->categories()->attach($request->categories_id);
        return redirect()->back()->with('success', 'your message,here');
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
        $movie->movie_link = $request->input('movie_link');
        $movie->youtube_link = $request->input('youtube_link');
        $movie->date_release = $request->input('date_release');
        $movie->name_producer = $request->input('name_producer');
        $movie->real_name_actor1 = $request->input('real_name_actor1');
        $movie->real_name_actor2 = $request->input('real_name_actor2');
        $movie->real_name_actor3 = $request->input('real_name_actor3');
        $movie->name_actor1 = $request->input('name_actor1');
        $movie->name_actor2 = $request->input('name_actor2');
        $movie->name_actor3 = $request->input('name_actor3');

        if($request->hasfile('image_movie')){
            $destination = 'image1'.$movie->image_movie;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('image_movie');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image1', $filename);
            $movie->image_movie = $filename;
        }

        if($request->hasfile('photo_productor')){
            $destination = 'image2'.$movie->photo_productor;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_productor');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image2', $filename);
            $movie->photo_productor = $filename;
        }

        if($request->hasfile('photo_actor1')){
            $destination = 'image3'.$movie->photo_actor1;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_actor1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image3', $filename);
            $movie->photo_actor1 = $filename;
        }

        if($request->hasfile('photo_actor2')){
            $destination = 'image4'.$movie->photo_actor2;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_actor2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image4', $filename);
            $movie->photo_actor2 = $filename;
        }

        if($request->hasfile('photo_actor3')){
            $destination = 'image5'.$movie->photo_actor3;
            if(File::exists($destination)){

                File::delete($destination);
            }
            $file = $request->file('photo_actor3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image5', $filename);
            $movie->photo_actor3 = $filename;
        }
        $movie->update();
        $movie->categories()->sync($request->categories_id);
        Session::flash('userupdate','User Has Been updated successfully!!!!!!!!!!!!!!!!!');
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

        Session::flash('userdeleted','User Has Been Deleted');
        return redirect()->route('movies.index');
    }
}
