<html>
<head>
	<title>Kanepe - @yield('title')</title>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="/css/simplemde.min.css">
	<script src="/js/simplemde.min.js"></script>
</head>
<body>
	<nav>
		<div class="nav-wrapper">
			<a href="/logout" class="brand-logo right">Çıkış</a>
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li><a href='/kanepe/posts'>Yazılar</a></li>
				<li> <a href='/kanepe/pages'>Sayfalar</a></li>
				<li> <a href='/kanepe/aboutme'>Hakkımda</a></li>
			</ul>
		</div>
	</nav>
	<div>
	</div>
	<div class="container">
		@yield('content')
	</div>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>
