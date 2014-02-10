<?php
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
//Confirm that book was published after 1950
foreach($books as $key => $book){
	foreach ($book as $key1 => $value) {
		if($key1=='published' && $value>=1950){
			echo "{$key}\n";
			echo "\tThis book was {$key1} in {$value}\n";
		}
		elseif ($key1=='author') {
			echo "\tThis books {$key1} is {$value}\n";
		}
		else{
			echo "\tThe number of {$key1} in this book is {$value}\n";
		}
	}
}
