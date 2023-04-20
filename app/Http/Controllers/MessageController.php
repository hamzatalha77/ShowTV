<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Route::resource('messages',MessageController::class);
    public function index()
    {
        $messages=Message::all();
        return view('message.allmessage')->with('messages',$messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('message.addmessage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=Message::create([
            'name'=>$request->name,
            'image_message'=>$request->image_message,
            'category'=>$request->category,
            'imdb'=>$request->imdb,
            'description'=>$request->description,
            'duration'=>$request->duration,
            'quality'=>$request->quality,
            'language'=>$request->language,
            'link'=>$request->link,
        ]);
        Session::flash('messageadded');
        return redirect(route('messages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message=Message::find($id);
        return view('message.editmessage')->with('message',$message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $message=Message::find($id);
        $message->name=$request->name;
        $message->image_message=$request->image_message;
        $message->category=$request->category;
        $message->imdb=$request->imdb;
        $message->description=$request->description;
        $message->duration=$request->duration;
        $message->quality=$request->quality;
        $message->language=$request->language;
        $message->link=$request->link;
        $message->save();
        Session::flash('messageupdated');
        return redirect(route('messages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        Session::flash('messagedeleted');
        return redirect(route('messages.index'));
    }
}
