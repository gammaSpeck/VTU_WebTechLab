<?php
	$A=array(array(1,2,3),array(4,5,6),array(7,8,9));
	$B=array(array(1,2,1),array(2,3,4),array(1,3,5));

	$r = count($A);
	$c = count($A[0]);

	function display($x,$r,$c)
	{				
		for($i=0; $i<$r; $i++)
		{	
            for($j=0; $j<$c; $j++)
				print $x[$i][$j]." ";
            print "<br>";
        }
	}
    
    function transpose($x,$r,$c)
	{				
		for($i=0; $i<$r; $i++)
		{	
            for($j=0; $j<$c; $j++)
				print $x[$j][$i]." ";
            print "<br>";
        }
	}

    function add($a,$b,$r,$c)
    {
        for($i=0; $i<$r; $i++)
		{	
            for($j=0; $j<$c; $j++)
				print $a[$i][$j]+$b[$i][$j]." ";
            print "<br>";
        }
    }

     function multiply($a,$b,$r,$c)
    {
        $sum=0;
        for($i=0; $i<$r; $i++)
		{	
            for($j=0; $j<$c; $j++)
            {
                for ($k=0; $k<$r; $k++){
                   $sum = $sum + $a[$i][$k]*$b[$k][$j];
                }
                $m[$i][$j] = $sum;
                $sum=0;
            }
        }
        return $m;
    }
    




    print "Matrix A is: <br>";
	display($A,$r,$c);
    print "<br> Transpose of A is : <br>";
    transpose($A,$r,$c);
	print "<br><br>";


    print "Matrix B is: <br>";
	display($B,$r,$c);
    print "<br> Transpose of B is : <br>";
    transpose($B,$r,$c);
	print "<br><br>";

    print "Sum of A and B is : <br>";
    add($A,$B,$r,$c);
    print "<br><br>";

    print "Product of A and B is : <br>";
    $M=multiply($A,$B,$r,$c);
	display($M,$r,$c);

?> 
