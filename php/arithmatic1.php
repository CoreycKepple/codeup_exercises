<?php
//Create Error Function
//Show values of functions which caused an error
function validate($a,$b) {
	if (!is_numeric($a) || !is_numeric($b)){
		echo '[!!Error!!] : One of the numbers entered is non-numeric'.PHP_EOL;
		echo "\t Input 1: ";
		var_dump($a);
		PHP_EOL;
		echo "\t Input 2: ";
		var_dump($b);
		PHP_EOL;
		return TRUE;
	}
}

//Create addition function
function add($a,$b){
	if (!validate($a,$b)){
		return $a+$b. PHP_EOL;
	}
	
}
//Create subtraction function
function subtract($a,$b){
	if (!validate($a,$b)){
		return $a-$b. PHP_EOL;
	}
}
//Create multiplication function
function multiply($a,$b){
	if (!validate($a,$b)){
	return $a*$b . PHP_EOL;
	}
}
//Create division function
function divide($a,$b){
	if ($b===0 || $b==0){
		echo '[!!Error!!] : You tried to divide by 0 -- not cool.'.PHP_EOL;
		echo "\t Input 1: {$a} ---- Input 2: {$b}".PHP_EOL;
		return TRUE;
	}
	elseif (!validate($a,$b)){
		return $a/$b . PHP_EOL;
	}
}
//Create modulus function
function modulus($a,$b){
	if (!validate($a,$b)){
		return $a%$b. PHP_EOL;
	}
}
//Allow user to chose type of math they wish to use
echo PHP_EOL."Do you want to:".PHP_EOL."\tadd(+)".PHP_EOL."\tsubtract(-)".PHP_EOL."\tmultiply(*)".PHP_EOL."\tdivide(/)".PHP_EOL."\tor find remainder(%) : ";
$input=fgets(STDIN);
//Check for user input
//Addition is checked first and if selected-- prompts user to enter first and second number
//Runs addition function with user input numbers
if ($input=='+'.PHP_EOL) {
	echo "Please select the first operand: ";
	$num1=trim(fgets(STDIN));
	echo "Please select the second operand: ";
	$num2=trim(fgets(STDIN));
	echo "Your sum is: ";
	echo add($num1,$num2);
}elseif ($input=='-'.PHP_EOL) {
	echo "Please select the minued ";
	$num1=trim(fgets(STDIN));
	echo "Please select the subtrahend: ";
	$num2=trim(fgets(STDIN));
	echo "Your difference is: ";
	echo subtract($num1,$num2);
}elseif ($input=='*'.PHP_EOL) {
	echo "Please select the first factor: ";
	$num1=trim(fgets(STDIN));
	echo "Please select the second factor: ";
	$num2=trim(fgets(STDIN));
	echo "Your product is: ";
	echo multiply($num1,$num2);
}elseif ($input=='/'.PHP_EOL) {
	echo "Please select the dividend: ";
	$num1=trim(fgets(STDIN));
	echo "Please select the divisor: ";
	$num2=trim(fgets(STDIN));
	echo "Your quotient is: ";
	echo divide($num1,$num2);
}elseif ($input=='%'.PHP_EOL) {
	echo "Please select the dividened: ";
	$num1=trim(fgets(STDIN));
	echo "Please select the divisor: ";
	$num2=trim(fgets(STDIN));
	echo "Your remaineder is: ";
	echo modulus($num1,$num2);
}

// //Run Tests of functions

// echo add('peanut',0);
// echo subtract(50,25);
// echo multiply('apple',20);
// echo divide(50,0);
// echo modulus(100,3);