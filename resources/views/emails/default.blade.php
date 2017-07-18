<html>
<head></head>
	<body>
		Hi, {{ $name }}

		Please active your account : {{ url('user/activation', $link)}}
		
	</body>
</html>