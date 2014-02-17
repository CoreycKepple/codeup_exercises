<?php

function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }

}
echo 'This program will convert Pig Latin -> English'.PHP_EOL.PHP_EOL;

echo 'What would you like to translate from Pig Latin to english?: ';
$input=get_input();
$array=explode(' ', $input);
$neword='';
foreach ($array as $word) {  
	$deleteay= substr($word,1,-2);
	$firstletter= substr($deleteay, -1);
	$secondletter= substr($word, 0,1); 
	$end = substr($deleteay, 0, -1);
	if (ctype_upper($secondletter)) {
		$firstletter=strtoupper($firstletter);
		$secondletter=strtolower($secondletter);
	}
	$neword.=$firstletter.$secondletter.$end.' ';
}
 
echo $neword.PHP_EOL;


// foreach ($array as $word) {
	
// }