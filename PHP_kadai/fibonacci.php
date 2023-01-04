<?php

$a =[0,1];

for($i =1; count($a)<=21; ++$i){
    
    $a[] = $a[$i-1] + $a[$i];
}

echo implode(PHP_EOL, $a);