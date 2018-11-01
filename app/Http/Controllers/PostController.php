<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{

    public function index()
    {     $posts=Post::orderByDesc('created_at')->paginate(4);
        return view('post.allPosts',array('posts'=>$posts));
    }


    public function create()
    {
        $categories=Category::all();
        return view('post.post_form',array('categories'=>$categories));
    }


    public function store(Request $request)

    {
        $this->validate($request,[
            'title'=>'required|unique:posts|min:5|max:2000',
            'category'=>'required',
            'body'=>'required|min:5|max:99999999999',
            'image'=>'required'
        ]);
        if($request->hasFile('image')) {

         $imageName= $request->image->store('public/images');
        }
        $post=new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->category=$request->category;
        $post->status=false;
        $post->image=$imageName;
        $post->author= Auth::user()->id;
        $post->save();

        return redirect(route('firstPage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::where('id',$id)->first();
        return view('post.showPost',array('post'=>$post));
    }


    public function edit($id)
    {
        $post=post::where('id',$id)->first();
        $categories=Category::all();
        return view('post.editPost',['post'=>$post,'categories'=>$categories]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required|min:5|max:2000',
            'category'=>'required',
            'body'=>'required|min:5|max:99999999999'
        ]);
        $post=Post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->category=$request->category;
        $post->update();

        return redirect(route('postsTable'));
    }

    public function destroy($id)
    {
       post::where('id',$id)->delete();

       return redirect()->back();
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

    public  function  personalPosts(Post $posts){
        $author= Auth::user()->id;
        $posts = Post::where('author', $author)->paginate(4);

   return view('post.personal_posts',array('posts'=>$posts));
    }

    public function firstPage()
    {
        $posts=Post::orderByDesc('created_at')->paginate(4);
        return view('post.index',array('posts'=>$posts));
    }


    public function storeAdmin(Request $request)

    {
        $this->validate($request,[
            'title'=>'required|unique:posts|min:5|max:2000',
            'category'=>'required',
            'body'=>'required|min:5|max:99999999999',
            'image'=>'required'
        ]);
        if($request->hasFile('image')) {

            $imageName= $request->image->store('public/images');
        }
        $post=new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->category=$request->category;
        $post->status=false;
        $post->image=$imageName;
        $post->author= Auth::user()->id;
        $post->save();

        return redirect(route('postsTable'));
    }

}
