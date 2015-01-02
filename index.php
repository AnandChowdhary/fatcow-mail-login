<?php
	$site = $_GET["url"];
?>
<!doctype html>
<html lang="en">

	<head>

		<title>Email</title>

		<meta charset="utf-8">
		<meta name="author" content="Anand Chowdhary">
		<meta name="description" content="Access your @<?php echo $site; ?> email account.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon-precomposed" href="//classrebels.co/img/icon.png">
		<link rel="shortcut icon" href="//classrebels.co/img/icon.png">

		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cabin">
		<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css">

		<link rel="stylesheet" type="text/css" href="normalize.css">
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>

	<body onload="document.querySelector('.address').focus()">

		<div class="login-form">

			<div class="in">

				<svg id="logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="360px" height="345px" viewBox="0 0 360 345" enable-background="new 0 0 360 345" xml:space="preserve">
					<polyline points="126.374,1.813 239.382,1.813 222.309,31.081 107.675,31.081 "/>
					<path d="M168.725,122.203c0,0-150.339-69.105-151.007,82.927c-0.669,152.032,168.38-8.13,168.38-8.13L168.725,122.203z
									 M163.641,192.748c0,0-156.814,126.459-106.909-27.748c14.7-45.423,104.904-25.097,106.909-16.154V192.748z"/>
					<polygon points="187,318.324 187,2.504 157.959,29.444 157.959,343.968 184.68,320.42 "/>
					<path d="M225.673,209.104l-19.791,20.881l92.598,115.239v-43.18l-56.562-65.734c23.634,24.652,76.606,64.75,94.09-47.717
									c22.764-146.431-149.91-64.952-149.91-64.952L163,165.001l24,41.486v-57.499l1.272,0.912L188,148.74l8.447-3.559
									c0,0,91.658-49.557,102.438,39.544C307.846,258.783,259.011,233.789,225.673,209.104z"/>
				</svg>

				<form action="https://fatcow.com/mail/index.bml" method="post">
					<input type="hidden" name="base" value="https">
					<input name="address" type="text" placeholder="Email (don't forget <?php echo $site; ?>)">
					<input name="password" type="password" placeholder="Password">
					<input name="Login" type="submit" value="Log In">
					<input type="hidden" name="m" value="">
				</form>

			</div>

		</div>

	</body>

</html>
