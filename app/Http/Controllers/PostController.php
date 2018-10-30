<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post as Post;
use App\User as User;

class PostController extends Controller
{

    public function viewPosts()
    {
        $posts = Post::orderByDesc('created_at')->get();

        return view('post.posts', array('posts' => $posts));
    }

    public function viewOnePost(Post $id)
    {
        $post = new Post();
        $post = $id;
        return view('post.showPost', array('post' => $post));
    }

    public function personalPosts()
    {
        $author = Auth::user()->id;
        $user = User::find($author);
        $posts = Post::where("author", "=", $user->id)->get();

        //dd($posts);
        return view('post.personal_posts', array('posts' => $posts));
    }


    public function userDashboard()
    {
        $posts = Post::orderByDesc('created_at')->get();

        return view('users.dashboard', array('posts' => $posts));
    }
}
