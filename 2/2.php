<?php 

$newFile = '3.txt';
$new1 = explode(' ', file_get_contents('1.txt'));
$new2 = explode(' ', file_get_contents('2.txt'));
$result = array();

foreach ($new1 as $value) {
	if(!in_array($value, $result)){
$result[] = $value;
	}
}

foreach ($new2 as $value) {
	if(!in_array($value, $result)){
$result[] = $value;
	}
}

print_r($result);
file_put_contents($newFile, implode(' .', $result));