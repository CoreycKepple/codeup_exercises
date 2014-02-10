<?php

//Create an array of book titles
//Nest an array within the array which contains info about each book
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
//Create loop which echos the keys and values of the arrays
//Create conditional which checks if book was published after 1950
//Only display books after 1950
foreach($books as $title => $book){
     foreach ($book as $key => $value) {
        if($value > 1950){
            echo "\n{$title}\n";
            echo "\tThis book was published in in {$book['published']}\n";
            echo "\tThe autor of this book is {$book['author']}\n";
            echo "\tThe number of pages in this book is {$book['pages']}\n";
        }

    }
}


