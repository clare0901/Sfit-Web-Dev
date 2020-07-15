<?php 
$n1 = $_POST["no1"];
$n2 = $_POST["no2"];



if ($n1 > $n2) {
	echo "n2 should be greater than n1";
}
else{
	echo "Prime numbers between $n1 and $n2 are:";
	for ($i= $n1; $i <= $n2 ; $i=$i+1) { 
		$count = 0;
		for ($j=2; $j <= $i/2 ; $j=$j+1) { 
			
			if ($i%$j == 0) {
				$count = $count+1;
				break;
			}

		}

		if ($count == 0) {
			echo " ".$i ;
		}
		
	}
}

?>