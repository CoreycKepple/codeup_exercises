<?php
//Prompt user to create starting number
fwrite(STDOUT,"\n\n\n\nPlease choose the first number in our range:  ");
$one = fgets(STDIN);

//Trim EOL character from input variable
$trimmed = trim($one,"\n");
$text = $trimmed;

//Report Error and exit program if min range != a number
if (!is_numeric($text)){
	echo "** Error -- a number MUST be input as minimum range**\n\tPlease Restart the Program\n\n";
	exit(0);
}

//Prompt User to create ending number
fwrite(STDOUT, "Please choose the second number in our range: ");
$two = fgets(STDIN);

//Trim EOL character from input variable
$trimmed3 = trim($two,"\n");
$text2 = $trimmed3;

//Report Error and exit program if min range != a number
if (!is_numeric($text2)){
	echo "** Error -- a number MUST be input as minimum range**\n\tPlease Restart the Program\n\n";
	exit(0);
}

//Prompt user to choose number to increment count by
fwrite(STDOUT, "Please choose the number you wish to increment your count by: ");
$incrementer = fgets(STDIN);

//Trim EOL character from input variable
$trimmed2 = trim($incrementer,"\n");

//Default increment count to 1 if input is not numeric
if (!is_numeric($trimmed2)){
	echo "\n\n***ERROR -- a number was not input -- default count by 1***\n\n";
	$trimmed2=1;
}

//Create loop which counts from $one -> $two
for ($text<$text2;$text <= $text2;$text+=$trimmed2){
echo "\n{$text}\n";
}

?>