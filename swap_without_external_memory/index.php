<?php

$x = 1;
$y = 2;

$x = $y + $x;
$y = $x - $y;
$x = $x - $y;

$str1 = "x";
$str2 = "y";
$str1 = ($str1 ^ $str2);
$str2 = ($str2 ^ $str1);
$str1 = ($str1 ^ $str2);




