<?php 
	$SUMMARIZE_SERVICES = "ls /library/users";
	$results = shell_exec($SUMMARIZE_SERVICES);
	$lines = explode("\n",$results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Running Services</title>
</head>

<body>
<div align="center">
<h1>JOURNAL DATA FOR</h1>
<table width="80%" border="0">
    <?php 
	foreach($lines as $line){
		$nibbles = explode("\t",$line);
  		echo("<tr>");
		foreach($nibbles as $value){
			echo("<td>$value</td>");
		}
  		echo("</tr>");
	}
	?>
</table></div>

</body>
</html>