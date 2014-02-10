<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

//Create variable to randomize day of the week
$random = mt_rand(1,7);

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date($random);

//Create switch which verifies the day of the week

switch($day_of_week) {
    case 1:
        echo "\nMonday = :( \n\n";
        break;
    case 2: 
        echo "\nTuesday = :\ \n\n";
        break;
    case 3:
    	echo "\nWednesday = :/ \n\n";
    	break;
    case 4:
    	echo "\nThursday = :| \n\n";
    	break;
    case 5:
    	echo "\nFriday = :) \n\n";
    	break;
    default:
    	echo "\nWeekend!!!\n\n";
    	break;
}