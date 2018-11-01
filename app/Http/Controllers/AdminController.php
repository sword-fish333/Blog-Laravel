<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Session;
class AdminController extends Controller
{
    public function postsTable(){
     //   $affected = 0;
//        $posts=Post::orderByDesc('created_at')->get();
//        foreach ($posts as $value) {
//            $post = Post::firstOrNew(['id' => $value['id']]);
//            $post->save();
//
//            $affected++;
//        }
//
//        $count = $affected;
//        $posts='';
        $posts=Post::orderByDesc('created_at')->get();
        return view('post.posts_table', array('posts'=>$posts));
    }

    public function usersTable(){
        $users = User::where('id', '!=', Auth::id())->get();
        return view('admin.users_table',array('users'=>$users));
    }

    public function deleteUser($id){
        user::where('id',$id)->delete();
        Session::flash('message', 'user deleted successfully!');
        return redirect()->back();
    }
}
