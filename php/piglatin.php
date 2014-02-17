<?php

function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }
}



echo 'What would you like to convert to Pig Latin: ';
$english=get_input();
$array=explode(' ', $english);
$piglatin='';
foreach ($array as $value) {
	$firstletter = substr($value, 0,1);
	$secondletter= substr($value,1,1);
	$rest= substr($value, 2);
	if (ctype_upper($firstletter)) {
		$firstletter=strtolower($firstletter);
		$secondletter=strtoupper($secondletter);
	}else{
		$secondletter=strtolower($secondletter);
	}
	
	$piglatin .= $secondletter.$rest.$firstletter.'ay'.' ';
}

echo $piglatin;






// get user input


// get words from sentence

// find first to second from last letters of word

// last letter of word

// llof . ftsol . ay

