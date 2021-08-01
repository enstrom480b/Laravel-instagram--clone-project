@extends('layouts.app')

@section('content')
<div class="container">

@foreach($posts as $post)
    <div class="row">
        <div class="col-4 offset-2">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
</div>
<div class="col-4 pt-2 pb-4">
    <div class="d-flex  align-items-center">
    <div class="pr-3">
        <img src="{{$post->user->profile->profileimage()}}" class="rounded-circle w-100"/>

    </div>
</div>

<div class="font-weight-bold">
    <a href="/profile/{{$post->user->id}}">
    <span class="text-dark">{{$post->user->username}}</span>
    </a>
    <a href="#" class="pl-3">follow</a>
</div>
@endforeach
</div>
@endsection
 