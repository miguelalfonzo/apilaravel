<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	@yield('css')
</head>
<body>

<header class="bg bg-primary">
	<a class="text-white" href="#">Proyectos</a>
</header>

<div class="container-fluid">
<div class="row">
<section class="col-2">
<nav>
	<ul>
		<li>opcion1</li>
		<li>opcion1</li>
		<li>opcion1</li>
		<li>opcion1</li>
	</ul>
</nav>	
</section>
<main class="col-10">
	@yield('content')
</main>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
@yield('js')
</body>
</html>