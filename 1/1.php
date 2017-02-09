
<?php 



$resultFile = '3.txt';
$array1 = explode(' ', file_get_contents('1.txt'));
$array2 = explode(' ', file_get_contents('2.txt'));
$result = array();

//Создаем первую строку
$result[] = implode(" ", $array1);

//Создаем вторую строку
$res2 = array();
foreach ($array1 as $value1) {
	foreach ($array2 as $value2) {
	if($value1 == $value2 && !in_array($value2, $res2)){
		$res2[] = $value2;
	}
}
}
$result[] = implode(" ", $res2);

//Создаем третью строку
$res3 = array();
foreach ($array1 as $value1) {
if(empty($res3[$value1])){
	$res3[$value1] = 1;
} else {
	$res3[$value1]++;
}
}

foreach ($array2 as $value2) {
if(empty($res3[$value2])){
	$res3[$value2] = 1;
} else {
	$res3[$value2]++;
}
}

$res4 = array();
foreach ($res3 as $key => $value) {
	if($value > 2){
$res4[] = $key;
	}
}
$result[] = implode(" ", $res4);

file_put_contents($resultFile, implode(PHP_EOL, $result));
print_r($result);



