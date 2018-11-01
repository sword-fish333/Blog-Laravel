@extends('admin.admin')
@section('text')
<div class="col-md-11 offset-1 " style="margin-top: 150px; margin-bottom: 100px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title posts_t" style="display: inline;">Posts Table </h4>
            <a href="{{route('createPost')}}" class="btn btn-success  btn-lg mt-3 offset-1" style="margin-bottom: 30px;">Create a new Post</a>
            <div class="table-responsive text-center">
                <table class="table">
                    <thead class="table_head">
                    <tr>
                        <th>Post Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>body</th>
                        <th>Category</th>
                        <th>Date created</th>
                        <th>Date updated</th>
                        <th>Photo</th>
                        <th>View Post</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="table_body">
                    @if($posts)
                        @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                       <td>{{$post->author()}}</td>
                        <td>{{str_limit($post->body, $limit = 10, $end = '...') }}</td>
                        <td>{{$post->category}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                        <td>                <img  class="img-thumbnail"
                          src="{{Storage::disk('local')->url($post->image)}}" alt="" style=" width:100px;">
                        </td>

                        <td><a href="{{route('showOnePost',$post->id)}}" class="btn btn-success"><i class="far fa-eye"></i></a></td>
                        <td><a href="{{route('editPost',$post->id)}}" class="btn btn-info"><i class="fas fa-edit"></i>  </a></td>

                        <td>  <form action="{{ route('destroyPost',['id'=> $post->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="form-group">

                                    <button type="submit" onclick="func()" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </form></td>
                        @endforeach

                    </tr>
                   @endif
                    </tbody>
                </table>
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