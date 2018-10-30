@extends('layouts.master')
@extends('layouts.assets')

@section('content')
    @include('partials.user_sidebar')
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


                        <div class="form-group m-b-40">
                            <select class="form-control p-0" id="category">
                                <option></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select><span class="bar"></span>
                            <label for="category">Category</label>
                        </div>
                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend " style="margin-top: 5px;">
                                    <span class="input-group-text">Upload Image</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="status">
                            <label class="custom-control-label pl-4" for="status">&nbsp;Published</label>
                        </div>

                        <div class="form-group m-b-5 mt-5">
                            <textarea name="content" class="form-control" rows="10" id="content"></textarea>
                            <span class="bar"></span>
                            <label for="content">Write content of post here:</label>
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