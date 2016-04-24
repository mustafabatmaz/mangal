<html>
<head>
	<meta http-equiv="Content-Language" content="en" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/css/app.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/genericons/genericons.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<script src="/js/jquery-2.2.0.min.js"></script>
	<script src="/js/materialize.min.js"></script>
</head>
<body>

	<header class="clean" style="background-image:url('/img/bg.png')">
		@section('header')
		<div class="row" style="padding:5% 0%">
			<div class="col s12 center-align flow-text grey-text text-lighten-5">
				<h2><a class="grey-text text-lighten-5" href="/">Mustafa BATMAZ</a></h2>
				<a class="grey-text text-lighten-5" href="https://twitter.com/MustafaBatmaz" target="_blank">
					<span class="genericon genericon-twitter" style="font-size:1.5em"></span>
				</a>
				<a class="grey-text text-lighten-5" href="https://github.com/mustafabatmaz" target="_blank">
					<span class="genericon genericon-github" style="font-size:1.5em"></span>
				</a>
				<a class="grey-text text-lighten-5" href="mailto:mustafabatmazz@gmail.com" target="_blank">
					<span class="genericon genericon-mail" style="font-size:1.5em"></span>
				</a>
				<a class="grey-text text-lighten-5" href="/blog">
					<h5>Blog Yazılarım</h5>
				</a>

		</div>
@show
	</header>

	<main id="main">
		<div class="container">
			@yield('content')
		</div>
	</main>
