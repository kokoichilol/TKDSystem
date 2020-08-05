<html>
<head>
<title>TKDSystem - @yield('title')</title>
<script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('/css/main.css')}}">
@yield('pageCss')
</head>
<body>
	@include('layouts.menuBar')
	<div class="main">@yield('content')</div>
	<script>
		@yield('pageScript')
 	</script>
</body>
</html>