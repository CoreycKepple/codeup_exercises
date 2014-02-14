<?php

function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }
 }

echo 'This is a currency conversion program -- this program will convert US dollar values to foreign currency'.PHP_EOL.PHP_EOL;
echo "\t Please enter the total US dollars you wish to conver: $ ";
    $dollars= get_input();
 	if (is_numeric($dollars)) {
 		$dollars==TRUE;
 	}else{
 		echo PHP_EOL."[!!Error!!] -- You did not enter a number -- Please Restart the program".PHP_EOL;
 		exit(0);
 	}
echo "\tWhat currency do you want to conver to - (E)uros, (P)esos, or (B)rittish Pounds: ";
    $converter=get_input(TRUE);
   	
   	if ($converter=='E') {
   		$euro= floatval(.73);
    	$final= ($dollars*$euro).' Euros';
    }elseif ($converter=='P') {
    	$peso= 13;
    	$final= ($dollars*$peso).' Pesos';
    }elseif ($converter=='B'){
    	$pounds= floatval(.6);
    	$final= ($dollars*$pounds).' Brittish Pounds';
    }else{
    	echo PHP_EOL."\t [!!Error!!] : Incorrect character input -- Please Restart Program".PHP_EOL;
    	exit(0);
    }


echo PHP_EOL."\t $ {$dollars} is equivalent to $final".PHP_EOL;
exit(0);