<?php
$str1 = "'''''";
$str2 = "''''";
$check = substr_count($str1, "'");
if ($check % 2 == 0) {
    echo "Everything is right!";
} else {
    echo "Error!";
}