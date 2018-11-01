<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{
    protected $fillable=['category'];
    protected $table='category';

    public function post(){
        return $this->hasMany('App\Post');
    }
}
