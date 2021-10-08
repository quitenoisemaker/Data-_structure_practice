<?php

/*Write a function that takes an array of positive integers. The function should calculate the sum of all even and odd integers and return an array containing the sums. The first index in the returned array should hold the sum of the even integers and the second index should hold the sum of the odd integers.*/

function numArr($number){
$d=0;
$e=0;

sort($number);
if ($number[0] > 0) {
foreach ($number as $num) {
		$c=$num % 2;//check if its even
		if ($c==0) {
			$d+=$num;// add even integer	
		}else{
			$e+=$num;// add odd integer	
		}
}
	return [$d, $e];

	}else{

		return "Array has a negative Interger";
	}
}

//call function
$test=[2,5,6,7,8];
print_r(numArr($test));
echo "<br><br>";


/* 5.	Write a method to replace all spaces in a string with '%20'.
Example
Input: "Mr John Smith " 
Output: "Mr%20John%20Smith"
 */

function replaceStr($string){

$res=str_replace(' ', '%20', $string);
 return $res;
}

$word="Thank you for coming";
echo replaceStr($word);
echo "<br><br>";


// PHP code to check whether a number is prime or Not
// function to check the number is Prime or Not
function primeCheck($number){
    if ($number == 1){
    return 0;
     }
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0){
            return 0;
        }
    }
    return 1;
}
 
// Driver Code
$number = 15;
$flag = primeCheck($number);
if ($flag == 1){
    echo "Prime";
}
else{
    echo "Not Prime";

    echo "<br>";
}


// Write a function that accepts an array of positive integers and returns an array of all prime numbers from the given array. A prime number is a number that is only divisible by 1 and itself.


function PrimeArray(array $numbers){
	
foreach ($numbers as $key => $value) {
	
	if (($value % 2 == 1) && (2 <= sqrt($value))){
            $new[]=$value;
        }
}
return $new;
}

$numbers=[5,4,19,7,89,3,67,15];
print_r(PrimeArray($numbers));



echo "<br>";

/*4.	Create a password validator function that takes in the password as its argument and returns an integer value you can evaluate to determine the password strength. Using the following validators:
0 -> very weak e.g. a password with only strings
1 -> weak e.g. a password with only numbers
2 -> strong e.g. a password containing strings and numbers
3 -> very strong e.g. a password containing strings, numbers and special characters (!,@,#,$,%, etc) */


function validatorCkecker($arg){

		$test=strtolower($arg);
	 $test=str_split($test);
	 $numbers = [1,2,3,4,5,6,7,8,9];
	 $alpha=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

	$string=false;
	$numb= false;
	$symbol= false;

for ($i = 0; $i <= count($test)-1; $i++) {
    if (in_array($test[$i], $numbers)) {
    	
    	$numb= true;
    }elseif (in_array($test[$i], $alpha)) {
    	# code...
    	$string=true;
    }else{
    	$symbol=true;
    }
   
}

if ($string && !$numb && !$symbol) {
	# code...
	return '0 -> very weak e.g. a password with only strings';
}elseif ($numb && !$string && !$symbol) {
	# code...
	return '1 -> weak e.g. a password with only numbers';
}elseif ($numb && $string && !$symbol) {
	# code...

	return '2 -> strong e.g. a password containing strings and numbers';
}elseif ($numb && $string && $symbol) {
	# code...
	return '3 -> very strong e.g. a password containing strings, numbers and special characters (!,@,#,$,%, etc)';
}

}

$test='223';


print_r (validatorCkecker($test));

echo "<br>";echo "<br>";


/*
6.	Write a function that takes two parameters, an array and some number. The function should determine whether any three numbers in the array add up to the number. If it does, the function should return the numbers as an array. If it doesn’t, the function should return -1.
Example
Input: [1, 2, 3, 4, 5, 6], 6
Output: [1, 2, 3]
*/

function ArrNum($a, $n){

	$pos=0;
	//$i=0;
	$count=count($a)-1;
    
	for ($i = 0; 3 <= $count; $i++) {

	//while ( $count>3) {
		# code...
		$newAa=array_slice($a, $i, 3);
		$new= ArrNum($newAa, $n);
			//$i++;
		return $newAa;
	}


// while ( $count>3) {
// 	# code...
// 	$first=array_slice($a, $i, 3);

// 			$pos=array_sum($first);
// 			if ($pos===$n) {
// 					# code...
// 					return $first;
// 				}else{
// 					$i++;

// 					// $first2=array_slice($a, $i, 3);
// 					// $pos2=array_sum($first2);


// 					// if ($pos2===$n) {
// 					// 	# code...

// 					// 	return $first2;
// 					// }

// 					$new=$a[$i];

// 					array_slice($arr, 0, $mid)
// 					return ArrNum($new, $n);

// 				}

// 				return 'not found';
// }
			
		//}
}

$arr=[1,2,4,4,9];
$num=7;
print_r (ArrNum($arr, $num));
