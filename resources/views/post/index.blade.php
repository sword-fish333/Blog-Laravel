@extends('layouts.master')
@extends('layouts.assets')
    @section('title')
        The Blog
    @endsection

    @section('content')
    <main class="container" role="main">
        <div class="jumbotron">
            <h1 class="jumbotron_title"><u>The Blog</u></h1>
        </div>
        <div class="col-md-11  " style="margin-top:100px;">
            @foreach($posts as $post)
                <article class="card mt-5 ml-5">
                    <div class="card-header text-center posts_title">
                        <h3>
                            <a href="{{$post->path()}}">
                                {{$post->title}}
                            </a>
                        </h3>
                    </div>
                    <div class="card-body posts_body">
                        <p>{{$post->body}}</p>
                    </div>

                </article>
            @endforeach
        </div>
    </main>
    @endsection