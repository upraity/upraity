<?php
$c=0;
    $n = trim(fgets(STDIN));
    $lo = preg_match_all('/[a-z]/',$n);
    for($i=1;$i<$lo-1;$i++){
        $c++;
    }
    if($lo > 10){
        echo  $n[0].$c.$n[$lo-1];
    }
    else{
        echo $n;
    }
?>
