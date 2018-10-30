
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/custom_main.css')}}">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
<script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>

</body>
</html>