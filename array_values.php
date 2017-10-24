<?php
$a=array(array(1,2,),array(2,3),array(4,5));
$b=array("1"=>array(1,2,),"2"=>array(2,3),"3"=>array(4,5));

var_dump(array_values($a));
var_dump(array_values($b));
