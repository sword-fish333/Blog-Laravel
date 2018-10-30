<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function main()
    {   $posts=Post::orderByDesc('created_at')->get();

        return view('post.index',array('posts'=>$posts));
    }


}
