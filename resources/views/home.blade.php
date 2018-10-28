@extends('layouts.master')

@section('content')
<div class="container " style="margin-top:80px;">
    <div class="row">

        @include('partials.user_sidebar')

        <main class="col-md-5 offset-2 col-sm-5 mt-3">
            <h1 class="user_name">Welcome<span style="color:black;"> <u>{{Auth::user()->name}}</u></span></h1>
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

                @endif

        </div>
    </div>

@endsection
