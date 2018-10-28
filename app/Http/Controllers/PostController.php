<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post as Post;
use App\User as User;

class PostController extends Controller
{

    public function viewPosts(){
        $posts=Post::orderByDesc('created_at')->get();

        return view('post.posts',compact('posts'));
    }

    public  function viewOnePost(Post $id){
        $post=new Post();
                $post=$id;
        return view('post.showPost',compact('post'));
    }

    public function personalPosts(){
        $author=Auth::user()->id;
        $user=User::find($author);
        $posts = Post::where("author", "=", $user->id)->get();

    //dd($posts);
        return view('post.personal_posts',compact('posts'));
    }

}

