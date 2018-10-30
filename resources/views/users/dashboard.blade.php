@extends('layouts.master')

@section('content')
<div class="container " style="margin-top:80px;">
    <div class="row">

        @include('partials.user_sidebar')

        <main class="col-md-5 offset-2 col-sm-5 mt-3">

            <!--flash message for logedin User-->
            @if (session()->has('logedin'))
                <h1 class="user_name text-center">{!! session('logedin')!!}</h1>
            @else
            <h1 class="user_name text-center">Dashboard</h1>
            @endif

                <a href="{{route('post.form')}}">
                <button class="btn btn-primary btn-block">
                    Create a post <i class="fas fa-pencil-alt"></i></button>
            </a>
        </main>
            @if(Session::has('success'))

                    <div class="col-md-5 mt-5 text-center ">
                        <div class="alert alert-success lead message">
                            {{Session::get('success')}}
                        </div>
                    </div>
                <!--table of all posts-->
                @endif
                @if($posts)

                    <table class="table table-hover table-dark table-striped offset-2 mt-5">

                        <tr  class="text-center">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Photo</th>
                            <th>View</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr class="text-center">
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{$post->author()}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                            <td>{{$post->photo_id}}</td>
                            <td><a href="{{$post->path()}}" class="btn btn-outline-success">View Post</a></td>
                            @endforeach
                        </tr>
                    </table>

                    @endif
        </div>
    </div>

@endsection
