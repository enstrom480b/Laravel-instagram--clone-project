<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
protected $guarded=[];

public function user()
{
    return $this->belongsTo(User::class);
}


public function profileimage()
{

    $imagepath=($this->image)?$this->image:'profile/yHMi4lp4jdCjVrF19QVHORdC68GgrFxJlKU1Uxc2.jpg';

    return '/storage/'.$imagepath;
}



public function followers(){
    
 return $this->belongsToMany(User::class);

}



}
 