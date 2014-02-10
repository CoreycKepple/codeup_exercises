<?php
//Prompt user to create starting number
fwrite(STDOUT,"Please choose the first number in our range:  ");
$one = fgets(STDIN);

//Prompt User to create ending number
fwrite(STDOUT, "Please choose the second number in our range: ");
$two = fgets(STDIN);

//Prompt user to choose number to increment count by
fwrite(STDOUT, "Please choose the number you wish to increment your count by: ");
$incrementer = fgets(STDIN);

//Trim EOL character from input variable
$trimmed = trim($one,"\n");
$text = $trimmed;
$trimmed2 = trim($incrementer,"\n");

//Default increment count to 1 if input is not numeric
if (!is_numeric($trimmed2)){
	$trimmed2=1;
}

//Create loop which counts from $one -> $two
for ($text<$two;$text <= $two;$text+=$trimmed2){
echo "\n{$text}\n";
}

?>