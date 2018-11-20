<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title') | assort</title>
	<link href="/css/app.css" rel="stylesheet">
	<script src="/js/app.js"></script>
</head>
<body>
<article>
	@include('layout.side')
	<div class="main_content">
		<h1 id="title">@yield('header_title')</h1>
		@yield('content')
	</div>
</article>
<script>
$(document).ready(function() {
	$('.select2').select2();
});
</script>
</body>
</html>