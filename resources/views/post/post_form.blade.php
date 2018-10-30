@extends('layouts.master')
@extends('layouts.assets')
@include('partials.user_sidebar')
@section('content')
    <div class="container mt-5 " style="margin-bottom: 100px;">
        <div class="row">

            <div class=" col-md-10 ml-auto col-sm-10 mt-5">
        <h1 class="main_title">Create Post</h1>
        <main >
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Write your ideas with passion</h4>

                    <form class="floating-labels m-t-40" action="/posts" method="post"  enctype="multipart/form-data">
                        <div class="form-group m-b-40">
                            <input name="title" type="text" class="form-control" id="title">
                            <span class="bar"></span>
                            <label for="title">Regular Input</label>
                        </div>


                        <div class="form-group m-b-40">
                            <select class="form-control p-0" id="input6">
                                <option></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select><span class="bar"></span>
                            <label for="input6">Gender</label>
                        </div>
                        <div class="form-group m-b-5">
                            <textarea name="content" class="form-control" rows="5" id="content"></textarea>
                            <span class="bar"></span>
                            <label for="content">Text area</label>
                        </div>
                        <div class="form-group m-b-5">
                        <button class="btn btn-info btn-block btn-lg" value="submit">Submit Post</button>
                        </div>
                    </form>
                </div>
            </div>
          </main>
        </div>
     </div>

            <div class="col-8">

    </div>

@endsection