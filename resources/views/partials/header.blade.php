
<nav class="navbar navbar-expand-sm bg-dark navbar-fixed-top fixed-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="{{asset('images/logo.png')}}" class="logo">
    </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsible">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="collapsible">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user_dashboard')}}"><strong>Dashboard</strong></a>
                </li>

            @endif



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop"  data-toggle="dropdown">
                    @if(Auth::check())
                        {{Auth::user()->name}}
                    @else
                        <i class="far fa-user"></i>  User Account
                    @endif
                </a>
                <div class="dropdown-menu">
                    @guest
                    <a class="dropdown-item" href="{{route('register')}}">Sign Up</a>
                    <a class="dropdown-item" href="{{route('login')}}">Sign in</a>
                    @else
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="logoutFunction(e)" style="color:black;">Logout</a>

                        <form action="{{route('logout')}}" id="logout-form" method="post" style="display: none;">
                            {{csrf_field()}}
                        </form>
                        @endguest
                </div>
            </li>
        </ul>
    </div>
</nav>
<script>
    function  logoutFunction(e) {
        e.preventDefault();
        document.getElementById('logout-form').submit();
    }
</script>