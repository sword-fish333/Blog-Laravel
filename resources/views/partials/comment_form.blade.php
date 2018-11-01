<div class="col-md-8 " style="margin-top:50px;">
    <div id="comment-form ">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title" id="comment_title" style="display: inline;">Comment</h4>
                @if(session()->has('message'))
                    <div class="alert col-md-4 text-center  alert-success " style="float: right; margin-right: 50px;" >
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form class="form-material m-t-40" action="{{route('saveComment',$post->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="comment_info" for="name">Name:</label>
                        <input type="text" class="form-control form-control-line" placeholder="name" name="name"> </div>
                    <div class="form-group">
                        <label class="comment_info" for="email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email"> </div>



                    <div class="form-group">
                        <label class="comment_info" for="comment">Comment</label>
                        <textarea class="form-control" name="comment" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                       <input type="submit" class="btn btn-success btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
