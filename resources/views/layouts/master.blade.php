<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @section('head')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    @show
</head>
<body>

<div id="container">
    @yield('content')
</div>

<footer class="navbar navbar-fixed-bottom">
    Hello!
</footer>

</body>
</html>