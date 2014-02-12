<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function varcheck($a){
	if(is_array($a)){
		var_dump($a).PHP_EOL.PHP_EOL;
	}elseif(isset($a)){
		fwrite(STDIN, "$a is set.".PHP_EOL.PHP_EOL);
	}elseif(empty($a)){
		fwrite(STDIN, "$a is empty.".PHP_EOL.PHP_EOL);
	}
}


// TEST: If var $nothing is set, display '$nothing is SET'
varcheck($nothing);

// TEST: If var $nothing is empty, display '$nothing is EMPTY'
$nothing = 1;
varcheck($nothing);

// TEST: If var $something is set, display '$something is SET'
varcheck($something);

// TEST: If array is checked and var_dumped
varcheck($array);

// Serialize the array $array, and output the results


// Unserialize the array $array, and output the results