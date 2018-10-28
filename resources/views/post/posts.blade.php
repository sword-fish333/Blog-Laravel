@extends('layouts.master')
@include(('partials.user_sidebar'))
    @section('content')

                <div class="col-md-9 col-sm-3 post_content" >
                    @foreach($posts as $post)
                    <article class="card mt-5">
                        <div class="card-header text-center posts_title">
                        <h3>
                            {{$post->title}}

                        </h3>
                            <p class="author_info">Written by:<a href="" class="author">{{$post->author()}}</a></p>
                            <p class="date_info">{{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <div class="card-body posts_body">
                        <p>{{$post->body}}</p>
                            <a href="{{$post->path()}}" class="btn btn-primary">Read More</a>
                        </div>

                    </article>
                        @endforeach
                </div>
            </div>
        </div>
    @endsection