<?php
//Explain the program to the user
echo "\n\n\n\t\t\t\tHello!\n\n-- This program is designed to run through a pre-defined Array--\n\n\n";
//Create prompt for user input to continue
fwrite(STDIN, "Please press enter to continue..."."\n\n");
fgets(STDIN);

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