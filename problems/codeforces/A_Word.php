<?php
    $na = trim(fgets(STDIN));
    $up = preg_match_all('/[A-Z]/',$na);
    $lo = preg_match_all('/[a-z]/',$na);
 
    $isup = ctype_upper($na);
    $islo = ctype_lower($na);
 
    if($up > $lo){
        echo strtoupper($na);
    }
    else{
        echo strtolower($na);
    }
?>
