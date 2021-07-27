<?php

function binary_search($list, $target){

	$first=0;
	$last=count($list)-1;

	while ( $first<= $last) {
		
		$mid=(int)(($first + $last)/2);

		if ($list[$mid]==$target) {
			return $target ." Found";
		}elseif ($list[$mid]<$target) {
			$first=$mid+1;
		}else{
			$last=$mid-1;
		}
	}


	return "Number not found";
}

// arrays must be sorted
$item=[2,3,4,6,7,8,9,12];
echo binary_search($item, 13);