<?php
// Generate Random Number
$random_number = rand(1,100);
// Prompt User to guess number
//Evaluate guess based on random number
do {
	fwrite(STDOUT, 'Please Guess a Number: ');
	$input = fgets(STDIN);

	if ($random_number > $input){
	echo 'HIGHER!'."\n";
	}
	if ($random_number < $input){
		echo 'LOWER!'."\n";
	}
} while ($random_number != $input);

if ($random_number == $input){
 		echo 'CORRECT!'."\n";
	} 
