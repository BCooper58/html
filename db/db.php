<?php
	$hostname = "localhost";
	$database = "stream";
	$username = "tedious";
	$password = "Pinkie111";
	
	function clean($input, $maxlength)
	{
		$input = substr($input, 0, $maxlength);
		$input = EscapeShellCmd($input);
		return($input);
	}
?>
