<?php
	$dir = '.';
	$scanned_directory = array_diff(scandir($dir), array('..', '.','index.php'));
	foreach ($scanned_directory as &$item) {
    		echo("<a href ='$item' target = '_blank'>$item</a></br>");
  	}
?>