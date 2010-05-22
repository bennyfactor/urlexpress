<?php
require_once '../includes/conf.php'; // <- site-specific settings
$expire =  time() + (60 * 60 * 24 * $sellby);

setcookie("rofflecopter", "lollercoaster", $expire, "/" );
setcookie("user", $_SERVER['REMOTE_USER'], $expire, "/" );
?>
<html>
<head>
	<link rel="stylesheet" href="include/style.css.php" type="text/css" media="screen" />	
</head>
<body>
<h1 >I'MMA BAKING SOME COOKIES</h1>
It's security through obscurity so don't give your cookies to strangers,  <?php echo $_SERVER['REMOTE_USER']; ?>!
Lalalalalalalalaaaaa~~~~~~~~~
<br /><br />
These cookies expire <span class="date"><?php echo date('ym.j H:i:s', $expire);?></span>  (<?php echo $sellby; ?> days from now)
</body>
</html>

