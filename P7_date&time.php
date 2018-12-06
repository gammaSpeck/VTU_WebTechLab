<! DOCTYPE html>
<html>
	<head>
		<title>DATE AND TIME </title>
		<meta http-equiv="refresh" content="1">		<!-- This sets the refresh rate to 1 sec. After each second the page is reloaded -->
	</head>

	<body>
		<!-- The . is the concatination operator in PHP -->
		<?php
			echo "<center> <h1> SERVER DATE: ".date("d-m-Y")." </h1> <br>" ;
			echo "<h2> SERVER TIME: ".date("h:i:s a")." </h2> <br>";
			date_default_timezone_set("Asia/Kolkata");	# Sets timezone to Indian

			echo "<center><h1>SERVER DATE IST: ".date("d-m-Y")."</h1><br>" ;
			echo "<h2> SERVER TIME IST: ".date("h:i:s a")."</h2><br>" ;	
		?>
	</body>
</html>
