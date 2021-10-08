<?php

// Find the recurring letter. [E,B,A,B] 

function recur($arr){	
	$lenght=count($arr)-1;	


	$count=array_count_values($arr);

	foreach ($count as $key => $value) {
		# code...
		if ($value >1) {
			# code...
			return $key;

		}
	}

	return 'Duplicates not found in the list';
	
}

$input=['E','B', 'Y', 'E'];
echo recur($input);
