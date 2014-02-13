<?php
function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }
}


function humanized_list($string, $sort='N') {
	echo 'Do you want to sort your list alphabetically? -- (Y) or (N): ';
	$sort= get_input(TRUE);
	if ($sort == 'Y') {
		$array= explode(', ', $string);
 		sort($array);
 		$name=array_pop($array);
 		array_push($array,'and '.$name);
 		$sentence= implode(', ', $array);
 		return $sentence;	
 	}else{
 		$array= explode(', ', $string);
 		$name=array_pop($array);
 		array_push($array,'and '.$name);
 		$sentence= implode(', ', $array);
 		return $sentence;
	}
}


// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo PHP_EOL."Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

?>












