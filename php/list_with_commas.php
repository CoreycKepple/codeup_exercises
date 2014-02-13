<?php


// function humanized_list($array){
// $a =implode(', ', $array);
// PHP_EOL;
// return $a;
// }

// $famous_fake_physicists= 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark';

// $phys_array = explode(', ', $famous_fake_physicists);




// echo humanized_list($phys_array).PHP_EOL;
// <?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string) {
 $array= explode(', ', $string);
 array_pop($array);
 array_push($array,'and Tony Stark');
 $sentence= implode(', ', $array);
 return $sentence;
}


// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo PHP_EOL."Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

?>












