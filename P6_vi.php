<?php
	$file="c1.txt";
	$count= file_get_contents($file);
	file_put_contents($file, $count+1);
	echo "<center><h3>The visitor count is ".$count."</h3></center>";
?>
