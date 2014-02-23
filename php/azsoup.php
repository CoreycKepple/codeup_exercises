<?php
function azsoup($str){
	$newstr = '';
	$array = explode(' ', $str);
	foreach ($array as $word) {
		$newarray = str_split($word);
		sort($newarray);
		$newword = implode('', $newarray);
		$newstr .= $newword.' ';
	}return $newstr;
}
function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }
}
echo "What would you like to re-order: ";
$input = get_input();
$newword = azsoup($input);
echo $newword;