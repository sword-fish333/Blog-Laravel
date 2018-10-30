<?php use \App\Http\Controllers\PostController; ?>
@extends('layouts.assets')
<!-- Left Sidebar -->
<!-- ============================================================== -->
<aside class="left-sidebar side_admin">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="{{asset('assets/images/logo-icon.png')}}" alt="elegant admin template"></span>
        <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li> <a class="" href="{{route('firstPage')}}" aria-expanded="false"><i class="ti-book"></i><span class="hide-menu">First Page </span></a>
                </li>
                <li> <a class="" href="{{route('post.posts')}}" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">All Posts </span><span class=" float-right mr-5 badge badge-pill badge-cyan">{{ PostController::postNr()}}</span></a>
                </li>

                <li> <a class="" href="{{route('writePost')}}" aria-expanded="false"><i class="ti-pencil"></i><span class="hide-menu"> Write Post</span></a>
                </li>

                <li> <a class="" href="{{route('personalposts')}}" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu"> Personal Posts</span></a>
                </li>
                <li class="nav-small-cap"></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
