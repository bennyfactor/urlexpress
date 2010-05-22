<?php
header("Content-Type: text/css");
require_once '../includes/conf.php'; // <- site-specific settings
?>

		body {
			font: 1em <?php echo $face; ?>;
			text-align: center;
			color: <?php echo $textcolor; ?>;
			background-color: <?php echo $bkg; ?>;
			margin-top: 5em;
		}
		
		h1 {
			font-size: 2em;
			padding: 0;
			margin: 0;
		}

		h4 {
			display: none;
		}
		
		form {
			width: 28em;
			background-color: <?php echo $formbkg; ?>;
			border: 1px solid <?php echo $border; ?>;
			margin-left: auto;
			margin-right: auto;
			padding: 1em;
		}

		fieldset {
			border: 0;
			margin: 0;
			padding: 0;
		}
		
		a {
			color: <?php echo $link; ?>;
			text-decoration: none;
			font-weight: bold;
		}

		a:visited {
			color: <?php echo $link; ?>;
		}

		a:hover {
			color: <?php echo $link; ?>;
		}

		.error, .success {
			font-size: 1.2em;
			font-weight: bold;
		}
		
		.error {
			color: <?php echo $warning; ?>;
		}
		
		.success {
			color: <?php echo $notice; ?>;
		}

		.date {
			color: <?php echo $warning; ?>;
			font-weight: bold;
		}