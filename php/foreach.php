<?php
//Define array to run through foreach loop
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//Create foreach loop 
//Check to determine if array is present within array
//Create nested foreach loop to display nested array

foreach($things as $thing){
	if(is_array($thing)){
		echo "ARRAY:\n";
		foreach ($thing as $array) {
		echo "\t{$array}\n";
		};
	}
	else{
		echo "{$thing}\n";		
	}
}