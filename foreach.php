<?php
$c=['a','b','c'];
foreach ($c as &$x){
//var_dump($x);
//var_dump(&$x);
var_dump($c);
}
echo "---------";
//var_dump($x);
//var_dump($c);
foreach($c as $x){
var_dump($c);
}
unset($x);
var_dump($c);
echo "\n";

$a=array('a','b');
foreach ($a as $k=>$v){
$a[$k+2]=$k;
var_dump($a);
}

echo "#########\n";
$b=array('a'=>1,'b'=>2);
$i=0;
foreach ($b as $k=>$v){
$b[$i++]=$i;
var_dump($b);
}
