<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @section('head')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    	<title>LaG6 - @yield('title')</title>
	@show
	
</head>
<body>
<div class="imageL">"icon.png"</div>
  <div class="group">LaG6 Unix</div>
 
  <div class="nav">
	
	<ul>
		<li><a class="active" href="index.shtml">Home</a></li>
		<li class="dropdown">
		<a href="#" class="dropbtn">Tutorials</a>
		<div class="dropdown-content">
		<a href="tutorial.shtml">Tutorial</a>
		<a href="assesments.shtml">Assesments</a>
		<li><a href="commands.shtml">Commands</a></li>
		<li class="dropdown">
		<a href="#" class="dropbtn">Unix Overview</a>
		<div class="dropdown-content">
		<a href="What.shtml">What is Unix used for?</a>
		<a href="History.shtml">History of Unix</a>
		<a href="downloads.shtml">Unix Downloads</a></div></li>
		</ul></div>

<div id="container">
    @yield('content')
</div>

<footer class="navbar navbar-fixed-bottom">
</footer>

</body>
</html>
