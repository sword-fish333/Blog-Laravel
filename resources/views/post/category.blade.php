@extends('admin.admin')
@section('text')
    <div class="container mt-5 " style="margin-bottom: 100px;">
        <div class="row">

            <div class=" col-md-10 ml-auto col-sm-10 mt-5">
                <h1 class="main_title">Add a new category</h1>
                <main >
                    <div class="card">
                        <div class="card-body">

                            @include('partials.messages')

                            <form class="floating-labels m-t-40" action="{{route('storeCategory')}}" method="post" >
                                {{csrf_field()}}
                                <div class="form-group m-b-40">
                                    <input name="category" type="text" class="form-control" id="category">
                                    <span class="bar"></span>
                                    <label for="category">Category name:</label>
                                </div>
                                <div class="form-group m-b-5 mt-4">
                                    <button class="btn btn-info  btn-lg" value="submit">Save category</button>
                                    <a href="{{route('categoryTable')}}" class="btn btn-warning  float-right btn-lg" >Go to categories table</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div>

@endsection