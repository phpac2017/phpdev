<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="_token" content="{{ csrf_token() }}" />
	
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-multiselect.css') }}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/bootstrap-responsive-tabs.css"> -->

	<!--script src="js/maxcdn-bootstrap.min.js"></script-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-box">
				<div class="form-top">
					<div class="form-top-left">
						<h3>Test Email</h3>
					</div>
				</div>
				<div class="form-bottom clearfix">
					<form role="form" method="POST">
						{{ csrf_field() }}

						<div class="form-group">
							<input  type="text" class="form-control" placeholder="Title" name="title">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="content" placeholder="Content">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-block btn-primary btn-lg"><i class="fa fa-sign-in"></i> Sign in!</button>
							<br/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
