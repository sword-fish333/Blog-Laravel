@extends('layouts.master')
@extends('layouts.assets')
@include('partials.user_sidebar')

    @section('content')




        <div class="col-md-9 post_content">
        <article class="card">


            <div class="card-header text-center ">
                <h3 class=" text-center posts_title">{{$post->title}}</h3>
                <p class="post_category">Category of post:  &nbsp;<span style="color: #A52A2A;"><u>{{$post->category}}</u></span></p>
            </div>
            <div class="card-body posts_body">
                @if($post->image!=1)
                <img  class="img-thumbnail" src="{{Storage::disk('local')->url($post->image)}}" alt="" style=" width:350px;">
                <p>{{$post->body}}</p>
                @endif
            </div>

        </article>
            @include('partials.comments')


            @include('partials.comment_form')
        </div>

    @endsection