@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
        @include('partials.user_sidebar')
            <div class=" col-md-9 ml-auto col-sm-10 mt-5">
        <h1 class="main_title">Create Post</h1>
        <main class="col-md-10">
            {!! Form::open(["route('post.post_form')",'metod'=>'post']) !!}
            {{csrf_field()}}
                <div class="form-group">
                    {!! Form::label('id_title','Title',['class'=>'form_label']) !!}
                    {!! Form::text('title',null,['placeholder'=>'Enter title of Post','class'=>'form-control','id'=>'id_title']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('id_body','Post',['class'=>'form_label']) !!}
                    {!! Form::textarea('content',null,['placeholder'=>'Enter content of post','rows'=>15,'class'=>'form-control','id'=>'id_body']) !!}
                </div>
            <div class="form-group">
                {!! Form::submit('Submit Post',['class'=>"btn btn-primary"]) !!}

            </div>
            {!! Form::close() !!}
          </main>
        </div>
     </div>
    </div>

@endsection