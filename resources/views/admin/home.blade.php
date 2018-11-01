@extends('admin.admin')
@include('partials.admin_sidebar')
@section('content')

    <h1 class="admin_welcome">Welcome <span style="color:#A52A2A;"><u>{{Auth::user()->name}}</u></span></h1>
    @endsection