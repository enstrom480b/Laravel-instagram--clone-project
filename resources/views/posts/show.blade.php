@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
         <img src="/storage/{{$post->image}}" class="w-100"/>
        </div>
        <div class="col-4">
            <div>
            <div class="d-flex align-items-center">
             <div class="pr-3">
                <img src="/storage/{{$post->user->profile->image}}" style="max-width:50px;" class="w-100 rounded-circle"/>

        </div>
          <div class="font-weight-bold"><span class="text-dark"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span></div>
        <div>
        </div> 
    </div>
    <hr>
<span class="text-dark"><a href="/profile/{{$post->user->id}}"><span class="font-weight-bold">{{$post->user->username}}</span></a> |
<a class="pl-3" href="#">follow</a>
<div>
</div>
</div>
</div>
</div>
</div>
@endsection
 