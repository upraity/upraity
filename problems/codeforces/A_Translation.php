<?php
    $t = trim(fgets(STDIN));
    $s = trim(fgets(STDIN));
    if(strrev($t) == $s){
        echo 'YES';
    }
    else{
        echo 'NO';
    }
?>
