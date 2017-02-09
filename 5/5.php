<?php 

$dir = __DIR__;
function scan($dir)
{
        $d = array();
        $arr = opendir($dir);
 
        while($v = readdir($arr))
        {
                if($v == '.' or $v == '..') continue;
                if(!is_dir($dir.DIRECTORY_SEPARATOR.$v)) $d[] = $v;
                if(is_dir($dir.DIRECTORY_SEPARATOR.$v)) $d[$v] = scan($dir.DIRECTORY_SEPARATOR.$v);
   }
 
        return $d;

}

print_r (scan($dir));








/*$dir = __DIR__;

function searchFiles($dir) 
     foreach ($arr as $value) { 
        if (is_file($value)) {
     	$result .= $value.'<br>';
     	
     }
 }

     return $result;
}
   
echo 'Абсолютный путь директории ' . $dir . ': <br>';
echo searchFiles($dir);
echo $a;



*/

  /*function getFileList($dir)
  {
    // массив, хранящий возвращаемое значение
    $retval = array();

    // добавляет конечный слеш, если была возвращена пустота
    if(substr($dir, -1) != "/") $dir .= "/";

    // указать путь до директории и прочитать список вложенных файлов
    $d = @dir($dir) or die("getFileList: Не удалось открыть каталог $dir для чтения");
    echo $d;


*/

