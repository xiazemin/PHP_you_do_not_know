<?php

$a=array();
$b=array('a'=>1,'b'=>2);
$c=array('a'=>4,'c'=>5);
var_dump(array_replace($a,$b));
var_dump(array_replace($c,$b));
