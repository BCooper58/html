<html><head><title>Blondeman's Linux Command Page</title>
<link rel = "stylesheet" type = "text/css" href = "../css/style2.css" />

</head>
<body>
<a href = "index.php?v=0"  >DATE</a>&nbsp; 
<a href = "index.php?v=1"  >MAN PS</a>&nbsp; 
<a href = "index.php?v=2"  >PS</a>&nbsp; 
<a href = "index.php?v=3"  >PS -A</a>&nbsp;
<a href = "index.php?v=4"  >TIME</a>&nbsp;
<a href = "index.php?v=5"  >PING</a>&nbsp;
<hr />

<div id = "contents">
<pre>
<?php
if (isset($_GET['v'])) {
	$thepost = $_GET['v'];
	} else {
		$thepost = -1;
	}
	
if ($thepost == -1) {
	$output = shell_exec('cal');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 0) {
	$output = shell_exec('date');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 1) {
	$output = shell_exec('man ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 2) {
	$output = shell_exec('ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}

if ($thepost == 3) {
	$output = shell_exec('ps -a');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 4) {
        $output = shell_exec('source/time');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

if ($thepost == 5) {
        $output = shell_exec('python3 source/pingdate.py');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

?>
</pre>
<hr />
</div>


</body>
</html>
