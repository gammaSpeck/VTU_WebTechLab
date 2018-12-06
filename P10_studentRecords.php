<!DOCTYPE html>
<html>
<body>

<style>
	table, td, th
	{
		border: 1px solid black;
		width: 40%;
		text-align: center;
		border-collapse:collapse;
		background-color:lightblue;
	}
	table { margin: auto; }

</style>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weblab";
	$a=[];
	// Create connection: Opens a new connection to the MySQL server
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection and return an error description from the last connection error, if any
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);

	$sql = "SELECT * FROM student"; 			 // Defines the query
	$result = $conn->query($sql);				// Performs a query through the connection and stores otput in $result
	echo "<br><br>";

	echo "<center> BEFORE SORTING <br><br>";
	echo "<table border='3'>";
	echo "<tr> <th>USN</th> <th>NAME</th> <th>Address</th> </tr>";
	if ($result -> num_rows > 0)				// If the query output is not empty
	{
		// Output data of each row and fetches a result row as an Associative Array
		while($row = $result->fetch_assoc())	// While new row entries can still be fetched
		{
			echo "<tr> <td>".$row["usn"]."</td>";
			echo "<td>". $row["name"]."</td>";
			echo "<td>". $row["address"]."</td></tr>";
			array_push($a, $row["usn"]);
		}
	}
	else
		echo "Table is Empty";
	echo "</table></center>";

# SORTING STARTS FROM HERE - SELECTION SORT
	$n = count($a);
	for($i=0; $i<($n-1); $i++){
		$pos = $i;
		for($j= $i+1; $j<$n; $j++ ){		// Checks current entry with ALL other below entries
			if ($a[$pos] > $a[$j])
				$pos= $j;
		}
		if($pos != $i ){
			$temp=$a[$i];
			$a[$i] = $a[$pos];
			$a[$pos] = $temp;
		}
	}

	$c=[];
	$d=[];
	$result = $conn->query($sql);

	if ($result->num_rows > 0)					// If the query output is not empty
		while($row = $result->fetch_assoc()){
			for($i=0;$i<$n;$i++)
				if($row["usn"]== $a[$i]){ 		// Sort other attributes following the SORTED USNs
					$c[$i]=$row["name"];
					$d[$i]=$row["address"];
				}	
		}
	
	echo "<br><br><br>";
	echo "<center> AFTER SORTING <br><br> ";
	echo "<table border='2'>";
	echo "<tr> <th>USN</th> <th>NAME</th> <th>Address</th> </tr>";
	for($i=0; $i<$n; $i++){
		echo "<tr>";
		echo "<td>". $a[$i]."</td>";
		echo "<td>". $c[$i]."</td>";
		echo "<td>". $d[$i]."</td></tr>";
	}
	echo "</table></center>";
	$conn->close();								// Always remember to close the connection after done
?>
</body>
</html>
