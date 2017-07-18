<html>
<head></head>
	<body style="background: black; color: white">
		Hi, {{ $name }}

		Please active your account : {{ url('user/activation', $link)}}
		
	</body>
</html>