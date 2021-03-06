<?php
//Check argument count to verify the correct amount have been input
if ($argc !=3){
	echo "Incorrect number of arguments were input -- please only add two numeric values\n";
	exit(0);
}

//Confirm to see if range of values will work for game
if ($argv[1] > $argv[2]){
	Echo "Error-- The minimum range must be higher than maximum range to play\n";
	exit(0);
}

//Confirm user input is a number -- if not set it to a number
if (!is_numeric($argv[1])){
	$argv[1]=1;
}
if (!is_numeric($argv[2])){
	$argv[2]=100;
}

//User will set range values in CLI
//Now convert user CLI input to variable and set variable to integer
$min = intval($argv[1]);
$max = intval($argv[2]);


//Create Instructions
//Take User's name
echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\tWelcome to High - Low!\n\n\tThe Object of the Game\n\n   is to guess the random number between\n\n\t       $min and $max \n\n\t       Have Fun!\n\n";
echo "\nPlease Enter Your Name: ";
$name = fgets(STDIN);
echo "\n\n";

// Generate Random Number
$random_number = mt_rand($min,$max);
$guess = 0;

// Prompt User to guess number
//Evaluate guess based on random number
do {
	fwrite(STDOUT, 'Please Guess a Number: ');
	$input = fgets(STDIN);
	++$guess;
		if ($input< $min || $input >$max){
		echo "Error please enter a number between $min and $max\n";
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
 		echo "\n ******CORRECT!*******\n\n";
 		echo "   Total Guesses: $guess\n\n";
} 

if ($guess <= 5){
	echo "$name\nGreat Job -- It took you 5 or less guesses!\n";
}

else{echo "{$name}\nTry again to get your guesses under 5\n";
}
exit(0);
?>