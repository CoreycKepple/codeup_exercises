<?php
// Generate Random Number
$random_number = mt_rand(1,100);
$guess = 0;
// Prompt User to guess number
//Evaluate guess based on random number
do {
	fwrite(STDOUT, 'Please Guess a Number: ');
	$input = fgets(STDIN);
	++$guess;

	if ($random_number > $input){
	echo 'HIGHER!'."\n";
	}
	if ($random_number < $input){
		echo 'LOWER!'."\n";
	}

} while ($random_number != $input);

if ($random_number == $input){
 		echo 'CORRECT!'."\n";
 		echo "Total Guesses: $guess\n";
	} 
