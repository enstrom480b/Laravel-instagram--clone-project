<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class postscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



 public function index()
 {

    $users=auth()->user()->following()->pluck('profiles.user_id');
    $posts=\App\Models\post::whereIn('user_id',$users)->get();
    return view('posts.index',compact('posts'));
    dd($users);
 }





    public function create() 
    {
    
        return view('posts.create');
    }
    public function edit() 
    {
        return view('posts.create');
    }

    public function store()
    {
        $data=request()->validate([
            'caption'=>'required',
            'image'=>'required|image' 
        ]);
        $imagepath=request('image')->store('uploads','public');
        $post=new \App\Models\post();
        $post->caption=$data['caption'];
        $post->image=$imagepath;
        $post->user_id=auth()->id();
        $post->save();
        return redirect('/profile/'.auth()->user()->id);
    }
    public function show($post) 
    {
        $post=\App\Models\post::find($post);
        return view('posts.show',['post'=>$post]);
    }
}
