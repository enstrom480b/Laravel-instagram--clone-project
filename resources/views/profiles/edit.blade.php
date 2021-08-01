@extends('layouts.app')
@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">  
{{ csrf_field() }}
 @method('PUT');
uploads/yHMi4lp4jdCjVrF19QVHORdC68GgrFxJlKU1Uxc2.j...
<div class="row">
<div class="col-8 offset-2">
    <div class="row">
<h1>EDIT PROFILE</h1>
    </div>
<div class="form-group row">
<label for="title" class="col-md-4 col-form-label"> post caption</label>                                
 <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}" required autocomplete="title" autofocus>
<span class="invalid-feedback" role="alert">
 </span>
 </div>
  <div class="form-group row">
<label for="description" class="col-md-4 col-form-label"> post description</label>                                
 <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description  }}" required autocomplete="description" autofocus>
<span class="invalid-feedback" role="alert">
 </span>
   </div>

   <div class="form-group row">
<label for="url" class="col-md-4 col-form-label"> post url</label>                                
 <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url}}" required autocomplete="url" autofocus>
<span class="invalid-feedback" role="alert">
 </span>
   </div>

       <div class="row">
       <label for="image" class="col-md-4" col-form-label>post image</label>
 <input type="file" class="form-control-file" id="image" name="image">                          
  <span class="invalid-feedback" role="alert">             
       </div>
<div class="row pt-3">
<button class="btn-primary btn"type="submit">Save Profile</button>
</div>            
</div>
</div>
</form>
</div>
@endsection
