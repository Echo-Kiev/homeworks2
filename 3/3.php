<?php 

$words = explode(' ', file_get_contents('1.txt'));

sort($words);
print_r($words);



