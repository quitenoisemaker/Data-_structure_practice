<?php

function binary_search($list, $target){

	$first=0;
	$last=count($list)-1;

	while ( $first<= $last) {
		$mid=(int) (($first + $last)/2);

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


$item=range(0, 10);
$number=5;
echo binary_search($item, 11);