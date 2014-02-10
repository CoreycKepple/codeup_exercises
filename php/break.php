<?php

//create a for loop that shows all even numbers between 1 and 100

for($i=1;$i<=100;$i++){
	if ($i%2==0) {
		echo "$i\n";
		continue;
	}
}