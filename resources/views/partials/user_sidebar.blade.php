<nav class="col-md-2 col-sm-3 bg-light  sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link first_link">Dashboard</a>
        </li>
    </ul>
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a href="{{route('post.posts')}}" class="nav-link">Posts Submited
                <i class="fas fa-book-open"></i></a>
        </li>
    </ul>
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{route('post.form')}}">
                Create a post <i class="fas fa-pencil-alt"></i></a>
        </li>
    </ul>
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{route('personalposts')}}">
                Personal Posts   <i class="fas fa-user-circle"></i></a>
        </li>
    </ul>
</nav>

