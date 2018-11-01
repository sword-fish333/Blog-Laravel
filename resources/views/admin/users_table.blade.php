@extends('admin.admin')
@section('text')
    <div class="col-md-11 offset-1 " style="margin-top: 150px; margin-bottom: 100px;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title posts_t" style="display: inline;">Posts Table </h4>
                <a href="{{route('createPost')}}" class="btn btn-success  btn-lg mt-3 offset-1" style="margin-bottom: 30px;">Create a new Post</a>
                <div class="table-responsive text-center">
                    @if(Session::has('message'))
                    <div class="alert alert-danger col-md-4 text-center offset-4">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="table_head">
                        <tr>
                            <th> Id of User</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Registered date</th>
                            <th>Delete user</th>
                        </tr>
                        </thead>
                        <tbody class="table_body">
                        @if($users)
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>

                                    <td>  <form action="{{ route('deleteUser',['id'=> $user->id]) }}" method="post">
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
    @endsection