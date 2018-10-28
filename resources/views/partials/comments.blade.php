    <div class="col-md-2">
    <h2 id="comment_title">Comments:</h2>
    </div>
    <div class="col-md-8 offset-2">
        @foreach($post->comments as $comment)
            <div class="card mt-5">
                <div class="card-header">
            <p class="comment_name">Name: <span style="color:#A52A2A;">{{$comment->name}}</span></p>
                </div>
                <div class="card-body">
                <p class="comment_body"><span  style="color:#A52A2A;">Commented:</span> {{$comment->content}}</p>
                </div>
            </div>
            @endforeach
    </div>