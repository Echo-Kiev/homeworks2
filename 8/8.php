<?php

$access = "counter.txt"; 

$visits = file($access); 

$current_visitors = $visits[0]; 

++$current_visitors; 

$fh = fopen($access, "w"); 

fwrite($fh, $current_visitors);

fclose($fh);  

echo  $fh;
