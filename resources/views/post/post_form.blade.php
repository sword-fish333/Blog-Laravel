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

                    @include('partials.messages')
                    <form class="floating-labels m-t-40" action="{{route('create')}}" method="post"  enctype="multipart/form-data">
                       {{csrf_field()}}
                        <div class="form-group m-b-40">
                            <input name="title" type="text" class="form-control" id="title">
                            <span class="bar"></span>
                            <label for="title">Title</label>
                        </div>


                        <div class="form-group m-b-40">
                            <select class="form-control p-0" name="category" id="category">
                                @foreach($categories as $category)
                                    <option>{{$category->category}}</option>
                                @endforeach
                            </select><span class="bar"></span>
                            <label for="category">Category</label>
                        </div>
                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend " style="margin-top: 5px;">
                                    <span class="input-group-text">Upload Image</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="image"  class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group m-b-5 mt-5">
                            <textarea name="body" class="form-control" rows="10" id="body"></textarea>
                            <span class="bar"></span>
                            <label for="body">Write content of post here:</label>
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