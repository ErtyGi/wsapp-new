<html>
<head>
    <title> {!!  trans('pages/general.name') !!} App Name - @yield('title')</title>

    <link rel="stylesheet" href="css/app.css">
</head>
<body>
@include('partials.navbar')


<div class="container">
    @yield('content')
</div>

</body>
</html>