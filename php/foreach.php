<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing){
	if (is_integer($thing)){
		echo "{$thing} is an Integer!\n";;
	}elseif (is_float($thing)) {
		echo "{$thing} is a Float!\n";
	}elseif (is_bool($thing)) {
		echo "{$thing} is a Boolean!\n";
	}elseif (is_array($thing)) {
		echo "{$thing} is an Array!\n";
	}elseif (is_null($thing)) {
		echo "{$thing} is Null!\n";
	}elseif (is_string($thing)) {
		echo "{$thing} is a String!\n";
	}
}