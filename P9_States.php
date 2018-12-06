<?php
	$states = "Mississippi Alabama Texas Massachusetts Kansas";
	$elements = array();
	$states1 = explode(' ',$states); # This func splits the sentence into words on the basis of ' ' (space) and stores in an ARRAY
	$len = count($states1);

	echo "Original Array :<br>";	# Prints out all elements stored in the array 
	for ($i = 0; $i < $len; $i++) {
    		echo "States[ $i ] = $states1[$i]<br>";
	}

	foreach($states1 as $j) {
		if(preg_match( '/xas$/', $j)) # Store word ending in xas in 0th index
			$elements[0] = $j;

		if(preg_match('/^k.*s$/i', $j)) # Stores word starting with k ands in s in 1st index (If you don't put that 'i' after /, for some weird reason PHP misbehaves and gives an error. Don't forget it !!
			$elements[1] = $j;

		if(preg_match('/^M.*s$/', $j)) # Stores word starting with M ands in s in 2nd index
			$elements[2] = $j;

		if(preg_match('/a$/', $j)) # Stores word ending in a in 3rd index
			$elements[3] = $j;
		
	}

	echo "<br><br>Resultant Array :<br>";
	for ($i = 0; $i < count($elements) ; $i++) {
    		echo "Elements[ $i ] = $elements[$i]<br>";
	}
?>
