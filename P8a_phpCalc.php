<?php
	# Make sure you use the same variable name as specified in the HTML file while reading
	$op1=$_POST['op1'];	
	$op2=$_POST['op2'];
	
	# This is pretty self explanatory
	print "<center><h2> Basic Calculations </h2><br>";
	print "Operands are: ".$op1." & ".$op2."<br><br>";
	print "Addition: ".($op1+$op2)."<br>";
	print "Subtraction: ".($op1-$op2)."<br>";
	print "Multiplication: ".($op1*$op2)."<br>";
	print "Division: ".($op1/$op2)."<br></center>";
	
?>
