<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function postsTable(){
        $affected = 0;
        $posts=Post::orderByDesc('created_at')->get();
        foreach ($posts as $value) {
            $post = Post::firstOrNew(['id' => $value['id']]);
            $post->save();

            $affected++;
        }

        $count = $affected;
        return view('post.posts_table', array('posts'=>$posts,'count'=>$count));
    }
}
