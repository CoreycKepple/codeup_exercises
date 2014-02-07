<?php
//Create Instructions
echo "Welcome to High - Low!\nThe Object of the Game\nis to guess the random number\nbetween 1 and 100\nHave Fun!\n\n\n\n\n";

// Generate Random Number
$random_number = mt_rand(1,100);
$guess = 0;
// Prompt User to guess number
//Evaluate guess based on random number
do {
	fwrite(STDOUT, 'Please Guess a Number: ');
	$input = fgets(STDIN);
	++$guess;
		if ($input< 1 || $input >100){
		echo "Error please enter a number between 1 and 100\n";
		}
			elseif ($random_number > $input){
			echo 'HIGHER!'."\n";
			}
		
			elseif ($random_number < $input){
			echo 'LOWER!'."\n";
			}
}while ($random_number != $input);

if ($random_number == $input){
 		echo 'CORRECT!'."\n";
 		echo "Total Guesses: $guess\n";
	} 
if ($guess <= 5){
	echo "Great Job -- It took you 5 or less guesses!\n";
}
else{echo "Try again to get your guess under 5\n";
}


	?>