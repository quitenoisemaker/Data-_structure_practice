<?php

function linear_search($list, $target){

	foreach ($list as $key => $value) {
			if ($value==$target) {
				return "Target found at index ". $key ;
			}
}
return 'Target not found in the list';
}

$item=[3,5,6,8,4];
echo linear_search($item, 4);
