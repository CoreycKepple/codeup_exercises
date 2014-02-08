<?php
//Prompt user to create starting number
fwrite(STDOUT,"Please choose the first number in our range: ");
$one = fgets(STDIN);

//Prompt User to create ending number
fwrite(STDOUT, "Please choose the second number in our range:  ");
$two = fgets(STDIN);

//Trim EOL character from input variable
$trimmed = trim($one,"\n");
$text = $trimmed;

//Create loop which counts from $one -> $two
for ($text<$two;$text <= $two;$text+=1){
echo "{$text}\n";
}

?>