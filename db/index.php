<html>
<head>
<title> index for db/</title>
</head>
<?php
session_start();
echo "ip ";
	 $str1 = getenv('REMOTE_ADDR');
$str1 = $_SERVER['REMOTE_ADDR'];
echo "$str1";
include 'usage.php';
?>
</html>
