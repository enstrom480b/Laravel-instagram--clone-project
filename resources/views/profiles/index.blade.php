@extends('layouts.app')

@section('content')
<div class="container">
 <div  class="row">
<div class="col-3 p-5">
<img height="200px" width="200px"src="/storage/{{$user->profile->image}}" class="rounded-circle">
</div>

<div class="col-9 pt-5">
    <div class="d-flex justify-content-between align-items-baseline">
        <div class="d-flex align-items-center pb-4">
        <h1>{{$user->username}}</h1>
        <follow-button  userid="{{$user->id}}" follows="{{$follows}}"></follow-button>
        </div> 
         @can('update',$user->profile)
         <a href="/p/create">Add New Post</a>
         @endcan
    </div>
@can('update',$user->profile)
<a href="/profile/{{$user->id}}/edit">Edit Profile</a>
@endcan
 <div class="d-flex">
<div class="pr-4"><strong>posts</strong>{{$user->posts->count()}}</div>
<div class="pr-4"> <strong>followers</strong>{{$user->profile->followers->count()}}</div>
<div class="pr-4"><strong>212</strong>{{$user->followers}}</div>
</div>
<div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
<div>{{$user->profile->description}}</div>
<div><a href="#">{{$user->profile->url}}</a></div>
</div>
<div class="row pt-5">
@foreach($user->posts as $post)
<div class="col-4">
<a href="/p/{{$post->id}}">
<img src="/storage/{{$post->image}}" class="w-100"/>
</a>
</div>
@endforeach
</div>
 </div>   
</div>
@endsection
