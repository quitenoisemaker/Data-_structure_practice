<?php
// Find the second largest number in the given array. [4, 2, 7, 9, 1] 
function largeArray($arr){	
	$lenght=count($arr)-1;	
	$high=max($arr);
	sort($arr);
	for ($i=0; $i <=$lenght ; $i++) { 
		# code...
		if ($arr[$i] <$high) {
			 $co= $arr[$i];
		}	
	}
	echo $co;
}

$input=[4, 2, 4,];
largeArray($input);