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


function primeNum($number){


	for ($i = 2; $i <= sqrt($number); $i++){
		$a=$number % 2;//check if its even
		if ($number % $i == 0) {
			echo "Not a prime Number";				
		}else{
			echo "The number is a prime number";
		}
	}
}

primeNum(15);



