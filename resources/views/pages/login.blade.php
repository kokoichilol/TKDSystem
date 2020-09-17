<html>
<head>
<title>TKDSystem - ログイン</title>
<script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('/css/main.css')}}">
<link rel="stylesheet" href="{{asset('/css/login.css')}}">
</head>
<body>
	<div class="main">
		<div class="content">
			<div class="input_area">
			{{ session('error_message') }}
				<form method="post">
				@csrf
    				<label for="mail_address">メールアドレス</label>
    				<input id="mail_address" name="mail_address" required>
    				<label for="password">パスワード</label>
    				<input id="password" name="password" type="password" required>
					<input class="login_button" type="submit" name="login_button" value="ログイン">
				</form>
			</div>
		</div>
	</div>
</body>
</html>