@extends('layouts.master')
@section('content')
<div class="col-md-6 offset-3 mt-3">
    <div class="card card-body">
        <h3 class="box-title m-b-0 admin_login_title">Admin Login</h3>
        <p class="admin_login_sign">Login to start session</p>
        @include('partials.messages')


        <form class="form-horizontal" action="{{route('adminLogin')}}" method="post">
            {{csrf_field()}}
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 admin_login_info text-right control-label col-form-label">Email*</label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 admin_login_info text-right control-label col-form-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>


            <div class="form-group m-b-0">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection