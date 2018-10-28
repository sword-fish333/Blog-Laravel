<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as User;
class Post extends Model
{
    protected $fillable=['title','body','author'];
    protected $table='posts';

    public  function path(){
        return '/posts/'.$this->id;
    }

    public function author(){

       $author=$this->belongsTo(User::class,'author');
     $u= $author->pluck('name');
    return $u[0];
    }

    public  function comments(){
        return $this->hasMany('App\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
