<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Punkte</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/vendor.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="nav-bar">
		<div class="col-xs-8">
			<div id="logo-container">&nbsp</div>
		</div>
		<li class="col-xs-4">
			<ul class="active"><a href="#">Dashboard</a></ul>
			<ul><a href="#">Settings</a></ul>
			<ul><a href="#">Logout</a></ul>
		</li>
	</div>
	@yield('content')
	<div class="col-xs-12 footer">
		<div class="col-xs-4">
			<span class="copy">
			&copy; 2016 Punchcard All Rights Reserved.
			</span>
		</div>
		<div class="col-xs-8">
			<span class="social-media-icon" style=" background-image: url('/assets/facebook.png');">
			</span>
			<span class="social-media-icon" style=" background-image: url('/assets/instagram.png');">
				
			</span>
			<span class="social-media-icon" style=" background-image: url('/assets/twitter.png');">
				
			</span>
		</div>
	</div>
</body>
</html>