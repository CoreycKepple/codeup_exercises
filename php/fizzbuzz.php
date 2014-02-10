<?php
//Set program start and end Variables 
$start = 1;
$end = 100;

//Create loop which counts from 1 -> 100
//On numbers divisible by 3 - replace # with "FIZZ"
//On numbers divisible by 5 - replace # with "BUZZ"
//On numbers divisible by both - replace # with "FIZZBUZZ"

for ($start!=0;$start<=$end;$start+=1){
	if ($start%5==0 && $start%3==0) {
		echo "FIZZBUZZ\n";
	}
		elseif($start%5==0){
			echo "BUZZ\n";
		}
		elseif ($start%3==0) {
			echo "FIZZ\n";
		}
		else{
			echo "$start\n";
		}
}
?>