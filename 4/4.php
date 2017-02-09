<!-- 4)Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':' (двоеточие). Удалить строки с повторами email. Удалить строки, в которых имена совпадают. -->
<?php

$file = explode("\n", str_replace("\r", "", file_get_contents('1.txt')));

$names = array();
$emails = array();

$result = array();
foreach ($file as $string) {
	if(!empty($string)){
		$contact = explode(":", $string);

		if(!in_array($contact[0], $names) && !in_array($contact[2], $emails)){
			$result[] = implode(":",$contact);
		}

		$names[] = $contact[0];
		$emails[] = $contact[2];
	}
}

var_dump(implode(PHP_EOL,$result));



// $file = explode("\n", str_replace("\r", "", file_get_contents('1.txt')));

// $result = array();
// foreach ($file as $string) {
// 	if(!empty($string)){
// 		$contact = explode(":", $string);

// 		$rec = true;

// 		foreach ($result as $value) {
// 			if($value[0] == $contact[0]){
// 				$rec = false;
// 			}
// 			if($value[2] == $contact[2]){
// 				$rec = false;
// 			}
// 		}

// 		if($rec){
// 			$result[] = $contact;
// 		}
// 	}
// }

// foreach ($result as $contact) {
// 	$result2[] = implode(":",$contact);
// }

// var_dump(implode(PHP_EOL, $result2));
