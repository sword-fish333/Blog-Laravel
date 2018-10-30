@extends('layouts.master')
@extends('layouts.assets')
@section('content')
<div class=" " style="margin-top:80px;">
    <div class="row">


        @include('partials.user_sidebar')

        <main class="col-md-5 offset-2 col-sm-5 mt-3">

            <!--flash message for logedin User-->
            @if (session()->has('logedin'))
                <h1 class="user_name text-center">{!! session('logedin')!!}</h1>
            @else
            <h1 class="user_name text-center">Dashboard</h1>
            @endif


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
                        <div class="col-md-9 offset-1 mt-5">
                    <table class="table  table-hover table-dark table-striped ">

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
                        </div>
                    @endif
        </div>
    </div>

@endsection
