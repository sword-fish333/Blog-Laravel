@extends('users.admin')
@section('text')
<div class="col-10 offset-1 " style="margin-top: 150px; margin-bottom: 20px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title posts_t">Posts Table </h4>
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
                        <th class="float-right">Action</th>
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
                        <td>{{$post->category_id}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                        <td>{{$post->photo_id}}</td>
                        <td><a href="{{$post->path()}}" class="btn btn-outline-success">View Post</a></td>
                        <td><a href="#" class="btn btn-outline-danger">Delete Post</a></td>
                        @endforeach

                    </tr>
                   @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection