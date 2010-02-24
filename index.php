<?php /* index.php ( lilURL implementation ) */

require_once 'includes/conf.php'; // <- site-specific settings
require_once 'includes/hjurl.php'; // <- lilURL class file

$lilurl = new lilURL();
$msg = '';

// if the form has been submitted
if ( isset($_POST['longurl']) )
{
	// escape bad characters from the user's url
	$longurl = trim(mysql_escape_string($_POST['longurl']));

	// set the protocol to not ok by default
	$protocol_ok = false;
	
	// if there's a list of allowed protocols, 
	// check to make sure that the user's url uses one of them
	if ( count($allowed_protocols) )
	{
		foreach ( $allowed_protocols as $ap )
		{
			if ( strtolower(substr($longurl, 0, strlen($ap))) == strtolower($ap) )
			{
				$protocol_ok = true;
				break;
			}
		}
	}
	else // if there's no protocol list, screw all that
	{
		$protocol_ok = true;
	}
		
	// add the url to the database
	if ( $protocol_ok && $lilurl->add_url($longurl) )
	{
		if ( REWRITE ) // mod_rewrite style link
		{
			$url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).$lilurl->get_id($longurl);
		}
		else // regular GET style link
		{
			$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'?id='.$lilurl->get_id($longurl);
		}

		$msg = '<p class="success">URL is: <a href="'.$url.'">'.$url.'</a></p>';
	}
	elseif ( !$protocol_ok )
	{
		$msg = '<p class="error">Invalid protocol!</p>';
	}
	else
	{
		$msg = '<p class="error">ERROR 56: Creation of your short URL failed for some reason.</p>';
	}
}
else // if the form hasn't been submitted, look for an id to redirect to
{
	if ( isSet($_GET['id']) ) // check GET first
	{
		$id = mysql_escape_string($_GET['id']);
	}
	elseif ( REWRITE ) // check the URI if we're using mod_rewrite
	{
		$explodo = explode('/', $_SERVER['REQUEST_URI']);
		$id = mysql_escape_string($explodo[count($explodo)-1]);
	}
	else // otherwise, just make it empty
	{
		$id = '';
	}
	
	// if the id isn't empty and it's not this file, redirect to it's url
	if ( $id != '' && $id != basename($_SERVER['PHP_SELF']) )
	{
		$location = $lilurl->get_url($id);
//
		// log the access
				$time = date("M j G:i:s Y"); 
				$ip = getenv('REMOTE_ADDR');
				$userAgent = getenv('HTTP_USER_AGENT');
				$referrer = getenv('HTTP_REFERER');
				$query = getenv('QUERY_STRING');

				//COMBINE VARS INTO OUR LOG ENTRY
				$msg = "LILURL " . $id . " IP: " . $ip . " TIME: " . $time . " REFERRER: " . $referrer . " SEARCHSTRING: " . $query . " USERAGENT: " . $userAgent; 


   					 $today = date("Y_m_d"); 
				     $logfile = $today."_log.txt"; 
				     $dir = 'logs';
				     $saveLocation=$dir . '/' . $logfile;
				     if (!$handle = @fopen($saveLocation, "a"))
					     {
				               exit;
				         }
				          else
				          {
				               if(@fwrite($handle,"$msg\r\n")===FALSE) 
				               {
				                    exit;
				               }
  
				               @fclose($handle);
				          }


//
		
		if ( $location != -1 )
		{
			header('Location: '.$location);
	
		}
		else
		{
			$msg = '<p class="error">ERROR 2393: URL NOT IN DATABASE.</p>';
		}
	}
}

// print the form

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

	<head>
		<title><?php echo PAGE_TITLE ; ?></title>
		
		<style type="text/css">
		body {
			font: 1em Helvetica, Arial, Sans-Serif;
			text-align: center;
			color: #000;
			background-color: #fff;
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
			background-color: #eee;
			border: 1px solid #ccc;
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
			color: #336699;
			text-decoration: none;
			font-weight: bold;
		}

		a:visited {
			color: #336699;
		}

		a:hover {
			color: #ea2001;
		}

		.error, .success {
			font-size: 1.2em;
			font-weight: bold;
		}
		
		.error {
			color: #ea2001;
		}
		
		.success {
			color: #99ccff;
		}
		
		</style>

	</head>
	
	<body onload="document.getElementById('longurl').focus()">
		<img src="<?php echo $banner ?>" />
		<h1><?php echo $heading; ?></h1>
		<?php echo $tagline; ?>
		<br /><br />
		<?php echo $msg; ?>
		<?php
		if ($_COOKIE[$tokenname] == $tokenvalue_stale)
		echo "EWWW STALE COOKIES. GO GET SOME FRESH ONES FROM MOMMA!";
		if ($_COOKIE[$tokenname] == $tokenvalue)
  		echo "<form action=\"". $_SERVER['PHP_SELF'] . "\" method=\"post\">
		
			<fieldset>
				<label for=\"longurl\">Enter a long URL:</label>
				<input type=\"text\" name=\"longurl\" id=\"longurl\" />
				<input type=\"submit\" name=\"submit\" id=\"submit\" value=\"SHORTEN\" />
			</fieldset>
		
		</form>";
else
  echo "<br />";
?>
		

		<h4>Powered by URLExpress</h4>
	
	</body>

</html>
		
