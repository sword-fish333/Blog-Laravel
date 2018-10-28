<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use App\Post;
use Session;
class CommentController extends Controller
{
        public function postComment(Request $request,$post_id){
            $this->validate(
                $request, array(
                    'name'=>'required|max:255',
                    'email'=>'required|email|max:255',
                    'comment'=>'required|min:5|max:2000'
                ));
            //find the post with which the comment is associated
            $post=Post::find($post_id);

            $comments = new Comment();
           $comments->name=$request->Input('name');
           $comments->email=$request->Input('email');
           $comments->content=$request->Input('comment');
           $comments->post()->associate($post);
            $comments->save();


            return redirect()->back()->with('message', 'Comment was added');

        }
}
