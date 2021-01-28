<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-comm project</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</head>
<body>
	{{ View::make('header') }}
	@yield('content')
	{{ View::make('footer') }}
</body>
<style>
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
</style>
</html>