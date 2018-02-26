<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>Acme Airlines - Test Website</title>
	
	<meta name="author" content="your name" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="index.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/internal/" id="logoLink">Acme Airlines - Test Website</a></h1>
			<!-- <img src="http://care.air.acmelatam.com/aalogo.png"> -->
		</div>
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php">About</a></li>
				<li><a href="https://www.f5.com/">Contact</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>Home</h2>
			<p>
				<br>
				<img src="http://i.imgur.com/qepuXNs.gif" alt="Funcionaaaaaa !!!">
				<img src="http://care.air.acmelatam.com/aalogo.png" alt="Funcionaaaaaa !!!">
                                <h1> Webserver is Working !!!!!</h1>
				<br>
			</p>
			<p> 
				<font size="4" color="blue">
				... And my Hostname is: <br><br>
				<?php echo gethostname(); ?>
				</font>
			</p>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[ACME]</a>
			</p>
		</div>
	</div>
</body>
</html>
