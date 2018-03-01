<html>
<head>
<title> Blondeman's Raw Page </title>
<?php
	#error_reporting(0);
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<li><a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a></li>';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
  <img src = "webpage-header-logo.png" height = "125px" width = "550px">
  <?php  echo "Today is " . date("m/d/Y"); ?>
</div>
<header><span style="color:#B0CB7D; background-color:#fff";>Blondeman's Raw Directory </span></header>

<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>

</center>
</footer>
</body>
</head>
</html>
