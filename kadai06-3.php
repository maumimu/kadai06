<?php
$arr = array(1, 3, 5, 7, 9);
function product($arr) {
    $ret = 1;
    foreach ($arr as $value) {
        $ret *= $value;
    }
    return $ret;
} 
echo product($arr);




    