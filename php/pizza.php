<?php

function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }

}


$sop=0;
$large=8;
$medium=6;
$small=4;
$largepizz=0;
$medpizz=0;
$smallpizz=0;
$extra=0;
echo 'How many guests will eat 1 slice of pizza?: '.PHP_EOL;
$sinslice=get_input();

echo 'How many guests will eat 2 slices of pizza?: '.PHP_EOL;
$dubslice=get_input();

echo 'How many guests will eat 3 slices of pizza?: '.PHP_EOL;
$tripslice=get_input();

echo 'How many guests will eat 4 slices of pizza?: '.PHP_EOL;
$forslice=get_input();

$dubslice= $dubslice *2;
$tripslice= $tripslice*3;
$forslice= $forslice*4;

$sop= $sinslice+$dubslice+$tripslice+$forslice;


if ($sop >= $large) {
	$largepizz = (int)($sop / $large);
	$sop -= ($largepizz * $large);
}


if ($sop >= $medium) {
	$medpizz = (int)($sop / $medium);
	$sop -= ($medpizz*$medium);
}

if ($sop >= $small) {
	$smallpizz = (int)($sop / $small);
	$sop -= ($smallpizz*$small);
}

if ($sop != 0) {
	$extra = $sop;
}

	echo "You need $largepizz large pizzas, $medpizz medium pizzas and $smallpizz small pizzas with $extra slices left over.\n";




