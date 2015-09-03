<html>
<head>
    <title> {!!  trans('pages/general.name') !!} App Name - @yield('title')</title>

    <link rel="stylesheet" href="/css/wsapp.css">

</head>
<body>
@include('partials.navbar')


<div class="container">
    @yield('content')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>