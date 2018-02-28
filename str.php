<?php
$a = "abcababa"; 
var_dump(str_replace('b','',$a));
$count=strpos($a,"ab"); 
$str=substr_replace($a,"",$count,2);
var_dump($a);
var_dump($str);
var_dump(substr_replace($a,"",$count,1));
var_dump("T123"=="123");
var_dump("T123"==123);
var_dump("T123"==0);
var_dump("123"=="123");
var_dump(123=="123");
