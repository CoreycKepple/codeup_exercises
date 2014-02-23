<?php

for ($a=99;$a!=0;$a--){
	$b=($a-1);
	if ($a>=3) {
		echo "{$a} Bottles of beer on the wall, {$a} bottles of beer.  Take one down pass it around {$b} bottles of beer on the wall!".PHP_EOL;
	}elseif ($a==2) {
		echo "{$a} Bottles of beer on the wall, {$a} bottles of beer.  Take one down pass it around {$b} bottle of beer on the wall!".PHP_EOL;
	}elseif ($a==1) {
		echo "{$a} Bottle of beer on the wall, {$a} bottle of beer.  Take one down pass it around {$b} bottle of beer on the wall!".PHP_EOL;
	}
}
echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.".PHP_EOL;

