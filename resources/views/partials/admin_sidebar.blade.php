<?php use \App\Http\Controllers\PostController; ?>
<!-- Left Sidebar -->
<!-- ============================================================== -->
<aside class="left-sidebar side_bar" >

    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav " style="padding-top: 30px;">
                <li> <a class="" href="{{route('postsTable')}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li> <a class="" href="{{route('firstPage')}}" aria-expanded="false"><i class="ti-book"></i><span class="hide-menu">First Page </span></a>
                </li>
                <li> <a class="" href="{{route('adminPosts')}}" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">All Posts </span><span class=" float-right mr-5 badge badge-pill badge-cyan">{{  PostController::postNr() }}</span></a>
                </li>
                <li> <a class="" href="{{route('postsTable')}}" aria-expanded="false"><i class="ti-pencil-alt"></i><span class="hide-menu">Posts Table </span><span class=" float-right mr-5 badge badge-pill badge-cyan">{{  PostController::postNr() }}</span></a>
                </li>
                <li> <a class="" href="{{route('createCategory')}}" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu"> Add a Category</span></a>
                </li>
                <li> <a class="" href="{{route('categoryTable')}}" aria-expanded="false"><i class="ti-layout"></i><span class="hide-menu"> Categories Table</span></a>
                </li>
                <li> <a class="" href="{{route('usersTable')}}" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu"> All Users</span></a>
                </li>
                <li> <a class="" href="{{route('adminShowCreate')}}" aria-expanded="false"><i class="ti-pencil"></i><span class="hide-menu"> Write Post</span></a>
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