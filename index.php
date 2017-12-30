<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>Test Website</title>
	
	<meta name="author" content="your name" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="index.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/internal/" id="logoLink">Test Website</a></h1>
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
                                <h1> Websever is Working !!!!!</h1>
				<br>
			</p>
			<p> 
				... And my IP Address is: 
			</p>
			<p>
				<?php
                    		//$output = shell_exec('ifconfig ens33');
				//$output = shell_exec('ifconfig eth0');
                   		$output = shell_exec('ifconfig eth0 | grep \'inet addr\' | cut -d: -f2 | awk \'{print $1}\'');
				echo "<pre>$output</pre>";
                		?>
			</p>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[HAND]</a>
			</p>
		</div>
	</div>
</body>
</html>
