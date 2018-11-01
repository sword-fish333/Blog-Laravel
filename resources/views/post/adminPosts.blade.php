@extends('admin.admin')
@section('text')

    <div class="col-md-9 col-sm-3 post_content"  >
        @if($posts)
            @foreach($posts as $post)
                <article class="card mt-5">
                    <div class="card-header text-center posts_title">
                        <h3>
                            {{$post->title}}

                        </h3>
                        <p class="author_info">Written by:<a href="" class="author">{{$post->author()}}</a></p>
                        <p class="date_info">{{$post->created_at->diffForHumans()}}</p>
                        <p class="category_display">Category: &nbsp;&nbsp;  <a href="{{route('categoryPosts',$post->category)}}" class="btn btn-lg btn-outline-dark">{{$post->category}}</a></p>
                    </div>
                    <div class="card-body posts_body">
                        <p>{{$post->body}}</p>
                        <a href="{{route('showOnePost',$post->id)}}" class="btn btn-primary">Read More</a>
                    </div>

                </article>
            @endforeach
        @endif
        <div class="d-flex justify-content-center" style="margin-bottom: 100px;">
            {{$posts->links()}}
        </div>
    </div>
    </div>
    </div>

@endsection