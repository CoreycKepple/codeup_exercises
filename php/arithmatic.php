<?php
//Create addition function
function add($a,$b){
	$c=$a+$b;
	if (is_int($c)){
		echo $c. PHP_EOL;
	}
}
//Create subtraction function
function subtract($a,$b){
	$c=$a-$b;
	if (is_int($c)){
		echo $c. PHP_EOL;
	}
}
//Create multiplication function
function multiply($a,$b){
	$c=$a*$b;
	if (is_int($c)){
		echo $c. PHP_EOL;
	}
}
//Create division function
function divide($a,$b){
	$c=$a/$b;
	if (is_int($c)){
		echo $c. PHP_EOL;
	}
}
//Create modulus function
function modulus($a,$b){
	$c=$a%$b;
	if (is_int($c)){
		echo $c. PHP_EOL;
	}
}

add(1,3.7837);
subtract(50,25);
multiply(3,20);
divide(50,4);
modulus(100,10);
