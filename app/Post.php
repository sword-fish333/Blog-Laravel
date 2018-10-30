<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as User;
class Post extends Model
{
    protected $fillable=['title','body','category_id','photo_id','author'];
    protected $table='posts';

    //function for returning the path of one post
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

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public static function postNr(){

        $affected = 0;
        $posts=Post::orderByDesc('created_at')->get();
        foreach ($posts as $value) {
            $post = Post::firstOrNew(['id' => $value['id']]);
            $post->save();

            $affected++;
        }

        $count = $affected;
        return $count;
    }
}
