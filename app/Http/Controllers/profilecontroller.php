<?php
namespace App\Http\Controllers;
use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
class profilecontroller extends Controller
{
  
    public function index(User $user)
    {
        $follows=(auth()->user())?auth()->user()->following->contains($user->id):false;
    
        return view('profiles.index',compact('user','follows'));
    }



    
    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
     
        return view('profiles.edit',compact('user'));
    }

    public function update( \App\Models\User $user)
    {      
        
        $this->authorize('update',$user->profile);
   
        /*
        $project = \App\Models\post::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->url = $request->url;
        //$project->image = $request->image;
        dd($project);
        //$project->save();
        */
        $data=request()->validate([
            'title'=>'required',
            'description'=>'required',
            'caption'=>'',
            'url'=>'url',
            'image'=>''
        ]);
if(request('image'))
{
$imagepath=request('image')->store('uploads','public'); 
$imagearray=['image'=>$imagepath];
auth()->user()->profile->update(array_merge($data,['image'=>$imagepath??[]]));
return redirect("/profile/{$user->id}");
}
}

}
