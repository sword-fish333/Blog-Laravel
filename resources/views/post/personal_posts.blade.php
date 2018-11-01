@extends('layouts.master')

@include('partials.user_sidebar')
@section('content')

    <div class="col-md-9 col-sm-3 post_content" >
        @if($posts)
        @foreach($posts as $post)
            <article class="card mt-5">
                <div class="card-header text-center posts_title">
                    <h3>
                        {{$post->title}}

                    </h3>
                    <p class="date_info">{{$post->created_at->diffForHumans()}}</p>
                </div>
                <div class="card-body posts_body">
                    <p>{{$post->body}}</p>
                    <a href="{{route('showOnePost',$post->id)}}" class="btn btn-primary">Read More</a>
                </div>

            </article>
        @endforeach
            @endif
    </div>
    </div>

    </div>
    <div class="d-flex justify-content-center" style="margin-bottom: 100px;">
        {{$posts->links()}}
    </div>
@endsection