<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
    case 1:
        echo "Monday\n";
        break;
    case 2: 
        echo "Tuesday\n";
        break;
    case 3:
    	echo "Wednesday\n";
    	break;
    case 4:
    	echo "Thursday\n";
    	break;
    case 5:
    	echo "Friday\n";
    	break;
    default:
    	echo "Weekend!!!\n";
    	break;
}