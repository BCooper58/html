<!DOCTYPE html>
<html>
<head>
<title>Blondeman's PHP Menu</title>
<link rel = "stylesheet" type = "text/css" href = "../css/style.css">
</head>
<body>
MENU <hr />
    <li><a href="index.php?v=0">Home</a></li>
	<li><a href="index.php?v=1" >About Le Blondeman</a></li>
	<li><a href="index.php?v=2" >Contact Le Blondeman</a></li>
	
<hr />

<?php
if (isset($_GET['v'])) {
	$get = $_GET['v']; // Default page
	} else {
		$get = -1;
	}
	
if ($get == -1) {
	   require "home.html";
}
if ($get == 0) {
	   require "home.html";
}
if ($get== 1) {
	require "about.html";
}

if ($get== 2) {
	require "contact.html";
}
?>
</body>
</html>
