<?php

function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }

}

function is_pal($str) {
	$trimed = trim($str);
	



}

echo "Enter phrase or word to check if it is a palindrome: ";
$input = get_input();

$check = is_pal($input);

var_dump($check);