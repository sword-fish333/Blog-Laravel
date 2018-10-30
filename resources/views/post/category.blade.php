@extends('layouts.master')
@extends('layouts.assets')
@include('partials.user_sidebar')
@section('text')
    <div class="container mt-5 " style="margin-bottom: 100px;">
        <div class="row">

            <div class=" col-md-10 ml-auto col-sm-10 mt-5">
                <h1 class="main_title">Create Post</h1>
                <main >
                    <div class="card">
                        <div class="card-body">


                            <form class="floating-labels m-t-40" action="/posts" method="post"  enctype="multipart/form-data">
                                <div class="form-group m-b-40">
                                    <input name="title" type="text" class="form-control" id="title">
                                    <span class="bar"></span>
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-group m-b-5 mt-4">
                                    <button class="btn btn-info btn-block btn-lg" value="submit">Submit Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div>

@endsection