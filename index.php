<html>
<head>
<title> Blondeman's HTML Page </title>
<link rel = "stylesheet"
	type = "text/css"
	href = "css/style.css" />
</head>

<?php
session_start();
$_SESSION['pagename']="html index";
include "db/pushhits.php";

	error_reporting(0);
    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
		//$I = "morganfreemanfolder.png";
		//while(false === strpos((string)$file,'.'))$I = "morganfreemanfolder.png";
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "background.png" && $file != "chaseelliothooters.gif"&& $file != "chrisbuescherrolls.gif"&& $file != "README.md"
        && $file != "style.css" && $file != "webpage-header-logo.png" && $file != ".git" && $file != "css" && $file != ".htaccess" && $file != "morganfreeman.jpg" && $file != "morganfreemanfolder.png" 
        && $file != "htaccess.php")
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
<header><span style="color:#B0CB7D; background-color:#fff";>Blondeman's HTML Site </span></header>

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
