<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Ceci se passe de commentaire.
-->
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <meta http-equiv="Content-Language" content="fr" />
		 <meta name="author" content="Marc Glisse" />
		 <title>
		  Mon super site
		 </title>

		 <link rel="stylesheet" href="{{ asset('css/app.css') }}">
		 
	</head>
	<body>
		@include('partials.navbar')
		<div class="container mx-auto">
			@yield('content')
		</div>
		<script src="{{ asset('js/app.js') }}"></script>
	</body>

	

</html>