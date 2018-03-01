<html>
<head>
<title> Blondeman's Pretty Icon Page </title>
<link rel = "stylesheet"
	type = "text/css"
	href = "style.css" />
</head>

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
<header><span style="color:#B0CB7D; background-color:#fff";>Blondeman's Pretty Icon Directory </span></header>

<hr />
<p>Files:</p>
<ul>
<img src = "folder.png" width=25px height=25px><a href = "I EM LONELEH"class = "bttn bttn2" target = "_blank">I EM LONELEH</a><br />
<img src = "file.png" width=25px height=25px><a href = "i em loneleh.txt"class = "bttn bttn2" target = "_blank">i em loneleh.txt</a>
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

