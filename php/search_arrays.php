<?php


// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found. 

// Search for Tina and Bob in $names. Make sure it works as expected.

function searchArray($a,$b){
	if(array_search($a, $b)!==FALSE){
		return 'TRUE'.PHP_EOL;
	}else {
		return 'FALSE'.PHP_EOL;
	}
}

echo searchArray('Tina',$names);

echo searchArray('Bob',$names);

echo searchArray('Adam',$names);
 

//Create a function to compare 2 arrays that returns the number of values 
//in common between the arrays. 
//Use the 2 example arrays and make sure your solution uses array_search().

function compareArray($array1,$array2){
	$i=0;
	foreach ($array1 as $value) {
	if (is_numeric(array_search($value, $array2))) {
		$i++;
		}
	}	return $i;
}
	
echo compareArray($names,$compare).PHP_EOL;

function displaySame($array1,$array2){
	return array_intersect($array1, $array2);
	}
$display= displaySame($names,$compare);
var_dump($display).PHP_EOL;



