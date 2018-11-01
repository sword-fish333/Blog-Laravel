@extends('admin.admin')
@section('text')
    <div class="col-md-11 offset-1 " style="margin-top: 150px; margin-bottom: 100px;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title posts_t" style="display: inline;">Roles Table </h4>
                <a href="{{route('createRole')}}" class="btn btn-success  btn-lg mt-3 offset-1" style="margin-bottom: 30px;">Add a new role</a>
                <div class="table-responsive text-center">
                    @if(Session::has('message'))
                        <div class="alert alert-danger col-md-4 text-center offset-4">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="table_head">
                        <tr>
                            <th> Id </th>
                            <th>Role name</th>

                            <th>Created date</th>
                            <th>Delete role</th>
                        </tr>
                        </thead>
                        <tbody class="table_body">
                        @if($roles)
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>

                                    <td>{{$role->created_at->diffForHumans()}}</td>

                                    <td>  <form action="{{ route('deleteRole',['id'=> $role->id]) }}" method="post">
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