<html>
<head>
	<title>TKDSystem - @yield('title')</title>
	<script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('/css/main.css')}}">
	@yield('pageCss')
</head>
<body>
	<nav>
		<ul>
			<li class="current"><a href="#">模試</a></li>
			<li><a href="#">履歴</a></li>
			<li><a href="#">マスタ登録</a></li>
		</ul>
	</nav>
	<div class="main">
		@yield('content')
	</div>
	<script>
		@yield('pageScript')
 	</script>
</body>
</html>