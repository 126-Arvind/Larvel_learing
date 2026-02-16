
<!DOCTYPE html>
<html lang='en'>
    <head>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="https://fonts.google.com/share?selection.family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900">
        <title>{{$title}}</title>
</head>
<body>
    <div class="container-fluid bg-dark">
<div class="row">
    <div class="col-sm-2">
    @include('include.sidebar')
    </div>
    <div class="col-sm-10">
        {{$content}}

    </div>
</div>
        <h1>Home page</h1>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js')}}">
    <script src="{{ asset('js/all.min.js')}}">
        </script>
</body>
</html>