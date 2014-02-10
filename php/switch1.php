<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

//Create variable to randomize day of the week
$random = mt_rand(1,12);

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$month_of_year = date($random);

//Create switch which verifies the day of the week

switch($month_of_year) {
    case 01:
        echo "\nIt's January!\n\n";
        break;
    case 02: 
        echo "\nIt's February!\n\n";
        break;
    case 03:
    	echo "\nIt's March!\n\n";
    	break;
    case 04:
    	echo "\nIt's April!\n\n";
    	break;
    case 05:
    	echo "\nIt's May!\n\n";
    	break;
    case 06:
    	echo "\nIt's June!\n\n";
    	break;
    case 07:
    	echo "\nIt's July!\n\n";
    	break;
    case 08:
    	echo "\nIt's August!\n\n";
    	break;
    case 09:
    	echo "\nIt's September!\n\n";
    	break;
    case 10:
    	echo "\nIt's October!\n\n";
    	break;
    case 11:
    	echo "\nIt's November\n\n";
    	break;
    default:
    	echo "\nIt's December\n\n";
    	break;
}