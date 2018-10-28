<div class="row offset-2 mt-4 pl-5">
    <div id="comment-form ">
        {{Form::open(['route'=>['comments.postComment',$post->id],'method'=>'POST'])}}
        <div class="row">
        <div class="col-md-4 form-group ml-2">
         {{Form::label('name','Name:',['class'=>'comment_info'])}}
            {{Form::text('name',null,['class'=>'form-control comment_info'])}}
        </div>
        <div class="col-md-4 form-group ml-5">
            {{Form::label('email','Email:',['class'=>'comment_info'])}}
            {{Form::text('email',null,['class'=>'form-control'])}}
        </div>
            <div class="col-md-9 form-group">
                {{Form::label('comment','Comment:',['class'=>'comment_info'])}}
                {{Form::textarea('comment',null,['class'=>'form-control'])}}

                {{Form::submit('Add comment',['class'=>'btn btn-success btn-block mt-4'])}}
            </div>
        </div>
    </div>
</div>
