@extends('admin.admin')
@section('text')
    <div class="container mt-5 " style="margin-bottom: 100px;">
        <div class="row">

            <div class=" col-md-10 ml-auto col-sm-10 mt-5">
                <h1 class="new_user">Add a new Admin</h1>
                <main >
                    <div class="card">
                        <div class="card-body">

                            @include('partials.messages')

                            <form class="floating-labels m-t-40" action="{{route('saveUser')}}" method="post" >
                                {{csrf_field()}}
                                <div class="form-group m-b-40">
                                    <input name="name" type="text" class="form-control" id="name">
                                    <span class="bar"></span>
                                    <label for="name"> Name:</label>
                                </div>

                                <div class="form-group m-b-40">
                                    <input name="email" type="email" class="form-control" id="email">
                                    <span class="bar"></span>
                                    <label for="email"> Email:</label>
                                </div>

                                <div class="form-group m-b-40">
                                    <input name="password" type="password" class="form-control" id="password">
                                    <span class="bar"></span>
                                    <label for="password"> Password:</label>
                                </div>

                                <div class="form-group m-b-40">
                                    <input name="confirm_password" type="password" class="form-control" id="confirm_password">
                                    <span class="bar"></span>
                                    <label for="confirm_password"> Confirm Password:</label>
                                </div>
                                <h5 class="role" for="role" style="margin-left: 30px;">Role:</h5>
                                <div class="row" style="margin-left: 150px; margin-bottom: 50px;">

                                    @foreach($roles as $role)
                                   <div class="col-md-2">
                                       <div class="checkbox">
                                           <label for=""><input name="role[]" value="{{$role->id}}" type="checkbox">{{$role->name}}</label>
                                       </div>

                                   </div>
                                        @endforeach
                                </div>
                                <div class="form-group m-b-5 mt-4">
                                    <button class="btn btn-info  btn-lg" value="submit">Save category</button>
                                    <a href="{{route('usersTable')}}" class="btn btn-warning  float-right btn-lg" >Go to Users</a>
                                </div>


                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div>

@endsection