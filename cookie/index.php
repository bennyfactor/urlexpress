<?php
setcookie("rofflecopter", "lollercoaster", time()+60*60*24*30, "/" );
setcookie("user", $_SERVER['REMOTE_USER'], time()+60*60*24*30, "/" );
?>
<html>
<head>
		<style type="text/css">
		body {
			font: 1em Helvetica, Arial, Sans-Serif;
			text-align: center;
			color: #000;
			background-color: #fff;
			margin-top: 5em;
		}
		</style>
</head>
<body>
<h1 >I'MMA BAKING SOME COOKIES</h1>
It's security through obscurity so don't give your cookies to strangers,  <?php echo $_SERVER['REMOTE_USER']; ?>!
Lalalalalalalalaaaaa~~~~~~~~~
</body>
</html>
