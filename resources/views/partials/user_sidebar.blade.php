<?php use \App\Http\Controllers\PostController; ?>
@extends('layouts.assets')
<!-- Left Sidebar -->
<!-- ============================================================== -->
<aside class="left-sidebar side_bar_user"  >

    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" >
            <ul id="sidebarnav" style="margin-top: 40px;">

                <li> <a class="" href="{{route('firstPage')}}" aria-expanded="false"><i class="ti-book"></i><span class="hide-menu">First Page </span></a>
                </li>
                <li> <a class="" href="{{route('showPosts')}}" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">All Posts </span><span class=" float-right mr-5 badge badge-pill badge-cyan">{{ PostController::postNr()}}</span></a>
                </li>

                <li> <a class="" href="{{route('createPost')}}" aria-expanded="false"><i class="ti-pencil"></i><span class="hide-menu"> Write Post</span></a>
                </li>

                <li> <a class="" href="{{route('personalPosts')}}" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu"> Personal Posts</span></a>
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
