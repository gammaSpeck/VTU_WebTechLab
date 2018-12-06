<! DOCTYPE html>
<!-- To ensure that this works properly, make sure you have a c1.txt with rwx permissions on. To do so just go the directory and type the following command in the terminal
	$sudo chmod 777 c1.txt-->
<!-- Refresh the page once and then the Program will start counting properly -->
<html>
<head>
	<title> Sample Website </title>

</head>
<body>
	<h1>Welcome to the sample website</h1>
	<?php
		$file="c1.txt";
		$count= file_get_contents($file);
		file_put_contents($file, $count+1);
		echo "<center><h3>The visitor count is ".$count."</h3></center>";
	?>

</body>













</html>
