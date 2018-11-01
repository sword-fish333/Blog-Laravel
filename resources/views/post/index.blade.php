@extends('layouts.master')
@extends('layouts.assets')
    @section('title')
        The Blog
    @endsection

    @section('content')
    <main class="container " role="main" style="margin-bottom:100px;">
        <div class="jumbotron jumbotron_main" >
            <h1 class="jumbotron_title"><u>The Blog</u></h1>
        </div>
        <div class="col-md-12 " style="margin-top:100px;">
            @if($posts)
            @foreach($posts as $post)
                <article class="card mt-5 ml-5">
                    <div class="card-header text-center posts_title">
                        <h3>

                                {{$post->title}}

                        </h3>
                        <p class="author_info">Written by:<a href="" class="author">{{$post->author()}}</a></p>
                        <p class="date_info">{{$post->created_at->diffForHumans()}}</p>
                       <p class="category_display">Category: &nbsp;&nbsp;  <a href="{{route('categoryPosts',$post->category)}}" class="btn btn-lg btn-outline-dark">{{$post->category}}</a></p>
                    </div>
                    <div class="card-body posts_body">
                        <p>{{$post->body}}</p>

                    </div>
                    <a class="btn btn-info col-md-2 mb-4" style="margin-left: 20px;" href="{{route('showOnePost',$post->id)}}">Read More</a>
                </article>

            @endforeach
                @endif

        </div>
    </main>
    <div class="d-flex justify-content-center" style="margin-bottom: 100px;">
        {{$posts->links()}}
    </div>
    @endsection