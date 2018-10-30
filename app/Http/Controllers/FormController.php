<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class FormController extends Controller
{
    public function getPostForm(){
        return view('post/post_form');
    }

    public function createPost(Request $request){
        $this->validate(
            $request, array(
            'title'=>'required|max:255',
            'content'=>'required|min:5|max:9999999999'
        ));

            $post=Post::create(array(
                'title'=>Input::get('title'),
                'body'=>Input::get('content'),
                'author'=>Auth::user()->id
            ));
            return redirect()->route('home')->with('success','Post submitted successfully');
    }
}
