<?php
//Create Error Function
function error_nonnum($z){
	if ($z==1){
	echo '[!!Error!!] : Number is non-numeric'.PHP_EOL;
	}else{
		echo '[!!Error!!] : Attmpted to divide by 0 -- not cool'. PHP_EOL;
	}

}

//Create addition function
function add($a,$b){
	if (is_numeric($a) && is_numeric($b)){
		$c=$a+$b;
		echo $c. PHP_EOL;
	}else {
		error_nonnum(1);
	}
}
//Create subtraction function
function subtract($a,$b){
	if (is_numeric($a) && is_numeric($b)){
		$c=$a-$b;
		echo $c. PHP_EOL;
	}else {
		error_nonnum(1);
	}
}
//Create multiplication function
function multiply($a,$b){
	if (is_numeric($a) && is_numeric($b)){
		$c=$a*$b;
		echo $c. PHP_EOL;
	}else {
		error_nonnum(1);
	}
}
//Create division function
function divide($a,$b){
	if($b==0){
		error_nonnum(2);
	}elseif (is_numeric($a) && is_numeric($b)){
		$c=$a/$b;
		echo $c. PHP_EOL;
	}else {
		error_nonnum(1);
	}
}
//Create modulus function
function modulus($a,$b){
	if (is_numeric($a) && is_numeric($b)){
		$c=$a%$b;
		echo $c. PHP_EOL;
	}else {
		$z=1;
		error_nonnum(TRUE);
	}
}

add(1,3.7837);
subtract(50,25);
multiply('apple',20);
divide(50,0);
modulus(100,10);
