<?php
//Create Instructions
// Take User's name
echo "Welcome to High - Low!\n\nThe Object of the Game\n\nis to guess the random number\n\nbetween 1 and 100\n\nHave Fun!\n\n";
echo "\nPlease Enter Your Name: ";
$name = fgets(STDIN);
echo "\n\n";

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

//Give Information regarding the Gameplay

if ($random_number == $input){
 		echo 'CORRECT!'."\n";
 		echo "Total Guesses: $guess\n\n";
	} 
if ($guess <= 5){
	echo "$name\nGreat Job -- It took you 5 or less guesses!\n";
}
else{echo "$name\nTry again to get your guess under 5\n";
}
exit(0);

	?>