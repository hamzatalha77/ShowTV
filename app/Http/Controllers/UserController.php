<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()

    {   $users = User::all();
        $users = User::with('roles')->paginate(2);
        return view('users.alluser',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;
        $user->name = $request->input('name');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        if($request->hasfile('user_image')){

            $file = $request->file('user_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images', $filename);
            $user->user_image = $filename;
        }
        $user->save();
        $user->attachRole($request->role_id);

           // return redirect()->route('users.index')->alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');



}




















        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'lname' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'image' => 'required|image|mimes:jpg,png,jepg',
        //     'password'=>'min:8'
        // ]);

        // $newImageName = time() . '-' . $request->name .'.' .
        // $request->image->extension();
        // $request->image->move(public_path('images'), $newImageName);

        // $user = User::Create([
        //          'name' => $request->input('name'),
        //          'lname' => $request->input('lname'),
        //          'email' => $request->input('email'),
        //          'password' => Hash::make($request->input('password')),
        //          'user_image' => $newImageName
        //       ]);
        //       $user->attachRole($request->role_id);
        //       return redirect(route('users.create'));




        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|string|max:255',
        //     'lname' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'user_image' => 'required|image',
        //     'password'=>'min:8'
        // ],[
        //         'email.required'=>'email is required',
        //         'email.string'=>'email must have an @',
        //         'email.unique'=>'email is already used',
        //         'user_image.required'=>'user image is required',
        //         'user_image.image'=>'user file must be an image',
        // ]);
        // if(!$validator->fails()){
        //     return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        // }else{
        //     $path = 'files/';
        //     $file = $request->file('user_image');
        //     $file_name = time().'_'.$file->getClientOriginalName();
        //     $upload = $file->storeAs($path, $file_name);
        //     if($upload){
        //         return response()->json(['code'=>1,'msg'=>'New User Has Been Added Successfully']);
        //     }
        // }

// $user=User::Create([
        //     'name'=>$request->name,
        //     'lname'=>$request->lname,
        //     'email'=>$request->email,
        //     'password' => Hash::make($request->password)
        //  ]);

        //  $user->attachRole($request->role_id);
        //  return redirect(route('users.create'));

        //         $user = new User;
        //     if($request->hasFile('image')){
        //         $completeFileName = $request->file('image')->getClientOriginalName();
        //         $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        //         $extenshion = $request->file('image')->getClientOriginalExtension();
        //         $compPic = str_replace(' ', '_', $fileNameOnly).'-'.rand() .'_'.time(). '.'.
        //         $extenshion;
        //         $path = $request->file('image')->storeAs('public/posts', $compPic);
        //         $user->image = $compPic;
        //     }
        //     if($user->save()){
        //         return ['status' => true, 'message' => 'Post Saved'];
        //     }else{
        //         return ['status' => false, 'message' => 'Something went wrong'];

        // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::with('roles')->paginate(2);
        return view('users.alluser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edituser',compact('user'));
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
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');

        if($request->hasfile('user_image')){

            $destination = 'images'.$user->user_image;
            if(File::exists($destination)){

                File::delete($destination);
            }

            $file = $request->file('user_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images', $filename);
            $user->user_image = $filename;
        }
        $user->update();
        $user->syncRoles($request->roles);
        Session::flash('userupdate','User Has Been updated successfully!!!!!!!!!!!!!!!!!');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('userdeleted','User Has Been Deleted');
        return redirect()->route('users.index');

    }
}
