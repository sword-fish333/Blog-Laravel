@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <p class="lead alert text-center alert-danger">{{$error}}</p>
    @endforeach
@endif