<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($list){
    // Return string of list items separated by newlines.
    $a="";
    foreach ($list as $key => $item) {
        $key++;
        $a.="[{$key}]{$item}".PHP_EOL;
    }
        return $a;
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) 
{
    if($upper == TRUE){
    return strtoupper(trim(fgets(STDIN)));
    }else{
        return trim(fgets(STDIN));
    }

}

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key-1]);
        //Resets array values when Item is removed from array
        $items = array_values($items);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);