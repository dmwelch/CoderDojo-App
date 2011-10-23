<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Login &raquo; CoderDojo</title>

	<!-- HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link href="<?php echo base_url(); ?>static/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	body {
		padding-top: 60px;
	}
	</style>

	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" type="image" href="<?=base_url();?>static/favicon.ico">

	<script src="<?=base_url();?>static/js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?=base_url();?>static/js/libs/jquery-1.6.2.min.js"><\/script>')</script> 
</head>

<body>
	<div class="container">
		<div class="hero-unit">
			<h1>Login</h1>
			<p>Welcome to the CoderDojo, hope you enjoy the awesome! If you haven't yet
			received your password, please ask a mentor.</p>
			
			<form class="form-stacked" method="POST">
				<fieldset>
					<div class="clearfix">
						<label for="login">Username</label>
						<div class="input">
							<input class="xlarge" id="login" name="login" size="30" type="text">
						</div>
					</div>
					<div class="clearfix">
						<label for="password">Password</label>
						<div class="input">
							<input class="xlarge" id="password" name="password" size="30" type="password">
						</div>
					</div>
					<?php
					if ($show_captcha) {
						$this->load->view('module/recaptcha.php');
					} 
					?>
					<div class="clearfix">
						<label>
							<input id="remember" name="remember" value=1 checked="remember" type="checkbox">
							<span>Remember Me</span>
						</label>
					</div>
				</fieldset>
				<div class="actions">
					<button type="submit" class="btn large primary">Login</button>
					<a class="right" href="/auth/forgot_password">Forgot your password? </a>
				</div>
			</form>
		</div> <!-- .hero-unit" -->

		<footer>
			<p>&copy; CoderDojo 2011</p>
		</footer>

	</div> <!-- .container -->

<!-- scripts concatenated and minified via ant build script-->
<script defer src="<?=base_url();?>static/js/script.js"></script>
<!-- end scripts-->

</body>
</html>
