@extends('layouts.master')

@include('partials.user_sidebar')

    @section('content')
        <div class="col-md-9 post_content">
        <article class="card">
            <div class="card-header text-center posts_title">
                <h3>{{$post->title}}</h3>
            </div>
            <div class="card-body posts_body">
                <p>{{$post->body}}</p>
            </div>

        </article>
            @include('partials.comments')
            @if(session()->has('message'))
                <div class="alert col-md-3 text-center offset-4 alert-success mt-5">
                    {{ session()->get('message') }}
                </div>
            @endif
            @include('partials.comment_form')
        </div>
    @endsection