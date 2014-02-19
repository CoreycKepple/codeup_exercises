<?php 

function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }

}

echo "How many words would you like to generate?: ";
$input = get_input();

$i=0;
while ($input > $i) {
	# code...

//Generate an index of 5 random numbers 1-6
	$dice= array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6');

	$roll1= array_rand($dice);
	$roll2= array_rand($dice);
	$roll3= array_rand($dice);
	$roll4= array_rand($dice);
	$roll5= array_rand($dice);

	$indexval= $roll1.$roll2.$roll3.$roll4.$roll5;

	//compare that index to dice.txt

	$filename= "data/dice.txt";
	$handle=fopen($filename, 'r');
	$file= fread($handle, filesize($filename));
	$array=explode("\n", $file);
	foreach ($array as $value) {
		$index=substr($value, 0,5);
		$word = trim(substr($value, 5));
		if ($indexval==$index){
			echo $word." ";
		}

	}
	++$i;
}

































 ?>