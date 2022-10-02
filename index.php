<?php
$str1 = "'''''";
$str2 = "''''";
$str3 = "())";
$str4 = "()()";
$strings = [$str1, $str2, $str3, $str4];
function right($str){
    echo "Everything is right! [$str]; ";
}
function false($str){
    echo "Not everything is right! [$str]; ";
}
for ($i = 0; $i < count($strings); $i++) {
    if (strpos($strings[$i], "'") !== false) {
        $check = substr_count($strings[$i], "'");
        if ($check % 2 == 0) {
            right($strings[$i]);
        } else {
            false($strings[$i]);
        }
    } 
    if (strpos($strings[$i], ")") !== false or strpos($strings[$i], "(") !== false) {
        $check1 = substr_count($strings[$i], ")");
        $check2 = substr_count($strings[$i], "(");
        if ($check1 == $check2) {
            right($strings[$i]);
        } else {
            false($strings[$i]);
        }
    }
}
