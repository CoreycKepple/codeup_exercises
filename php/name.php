<?php

fwrite(STDOUT, 'What is your name? ');

$first_name = fgets(STDIN);

fwrite(STDOUT, 'Hello '.$first_name);

?>