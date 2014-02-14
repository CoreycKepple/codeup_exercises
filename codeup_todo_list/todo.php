<?php

// Create array to hold list of todo items
$items = array();

// File to load
$file = 'data/todo_list.txt';

// List array items formatted for CLI
function list_items($list){
    $a = '';
    // Return string of list items separated by newlines.
    foreach ($list as $key => $item) {
          $a .= "[" . ($key + 1). "]".$item.PHP_EOL;
    }
    return $a;
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }

}
// Create a function that reads the file, and adds each 
// line to the current TODO list
function addFile($handle, $items, $filename){
    $contents=fread($handle, filesize($filename));
    $array = explode("\n", $contents);
    foreach ($array as $value) {
        array_push($items, $value);
    } return $items;
}

 
   



// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit, (S)ort, (O)pen File, : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Add to begining or end of list
        echo 'Is the item high priority (Y)es or (N)o : ';
        $firstlast = get_input(TRUE);
            // Ask for entry
            echo 'Enter item: ';
            $input= get_input();
        if ($firstlast == 'Y') {
            // Add entry to list array
            array_unshift($items, $input);
        }else{
            // Add entry to list array
            array_push($items, $input);
        }
       
    }elseif($input =='S'){
        //Sort which way
        echo 'Sort (A) to Z OR (Z) to A : ';
        $input = get_input(TRUE);
        if($input =='A'){
            sort($items);
        }elseif($input == 'Z'){
            rsort($items);
        }else{
            echo "[ERROR -- A or Z were not entered -- Please restart program]".PHP_EOL;
            return;
        }
     }elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key-1]);
        //Resets array values when Item is removed from array
        $items = array_values($items);
    }elseif ($input =='F'){
        array_shift($items);
    }elseif ($input == 'L'){
        array_pop($items);
    }elseif ($input == 'O'){
        echo 'Enter file name: ';
        $input=get_input();
        $handle=fopen($input, 'r');
        $items=addFile($handle,$items,$input);
}
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);