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
<img src="{{url('/images/newLogoSmall.png')}}" alt="Image" class="imageL"/>
<h1 class="group">LaG6 Unix <br />Tutorial</h1>

<div class="nav">

	<ul>
		<li><a class="active" href="/">Home</a></li>
		<li class="dropdown">
			<a href="" class="dropbtn">Tutorials</a>
			<div class="dropdown-content">
				<a href="/tutorials/type">By Type</a>
				<a href="/tutorials/skill_assessment">By Skill Assessment</a></div></li>
		<li><a href="/skills_assessment">Skills Assessment</a></li>
		<li><a href="/commands">Commands</a></li>
		<li class="dropdown">
			<a href="/unix_history" class="dropbtn">Unix Overview</a>
			<div class="dropdown-content">
				<a href="/what">What is Unix used for?</a>
				<a href="/history">History of Unix</a>
				<a href="/downloads">Unix Downloads</a></div></li>
	</ul></div>

<div id="container">
	@yield('content')
</div>

<footer class="navbar navbar-fixed-bottom">
</footer>
<link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
<link rel="icon" href="{!! asset('favicon.ico') !!}" />

</body>
</html>