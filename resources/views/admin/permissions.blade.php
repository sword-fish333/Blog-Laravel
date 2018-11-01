@extends('admin.admin')
@section('text')
    <div class="col-md-11 offset-1 " style="margin-top: 150px; margin-bottom: 100px;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title posts_t" style="display: inline;">Permissions Table </h4>
                <a href="{{route('permission.create')}}" class="btn btn-success  btn-lg mt-3 offset-1" style="margin-bottom: 30px;">Add a permission</a>
                <div class="table-responsive text-center">
                    @if(Session::has('message'))
                        <div class="alert alert-danger col-md-4 text-center offset-4">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="table_head">
                        <tr>
                            <th> Id </th>
                            <th>Permission name</th>

                            <th>Created date</th>
                            <th>Delete Permission</th>
                        </tr>
                        </thead>
                        <tbody class="table_body">
                        @if($permissions)
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->id}}</td>
                                    <td>{{$permission->name}}</td>

                                    <td>{{$permission->created_at->diffForHumans()}}</td>

                                    <td>  <form action="{{ route('permission.destroy',['id'=> $permission->id]) }}" method="post">
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