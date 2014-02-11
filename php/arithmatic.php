<?php
//Create Error Function
function validate($a,$b) {
	if (!is_numeric($a) || !is_numeric($b)){
		echo '[!!Error!!] : One of the numbers entered is non-numeric'.PHP_EOL;
		echo "\t Input 1: {$a} ---- Input 2: {$b}".PHP_EOL;
		return TRUE;
	}else{
	return FALSE;
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
	if ($b==0){
		echo '[!!Error!!] : You tried to divide by 0 -- not cool.'.PHP_EOL;
		echo "\t Input 1: {$a} ---- Input 2: {$b}".PHP_EOL;
		return FALSE;
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

echo add('peanut',0);
echo subtract(50,25);
echo multiply('apple',20);
echo divide(50,10);
echo modulus(100,3);