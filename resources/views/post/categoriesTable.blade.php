@extends('admin.admin')
@section('text')
    <div class="row" style="margin-bottom: 100px;">
    <div class="col-lg-10 offset-1 " style="margin-top: 100px; ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title t_title" style="display: inline;">Categories Table</h4>
                <a href="{{route('createCategory')}}" class="btn btn-success btn-lg ml-5 mb-3" >Add a new Category</a>
                <div class="table-responsive">
                    <table class="table color-table success-table table-hover ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name of Category</th>

                            <th>Delete</th>
                        </tr>

                        </thead>
                        <tbody class="t_body">
                        @if($categories)
                            @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->category}}</td>


                            <td>
                                <form action="{{ route('destroyCategory',['id'=> $category->id]) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="form-group">

                                        <button type="submit" onclick="func()" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </div>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function  func() {
            if(confirm('Are you sure, You Want to delete this?'))
            {

            }
            else{
                event.preventDefault();
            }
        }
    </script>
    @endsection