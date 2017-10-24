<?php

$a=array(1,2,3);
unset($a[1]);

var_dump($a);

$arr = array_values($a);
var_dump($arr);

$a=array_splice($arr,1);

var_dump($a);


