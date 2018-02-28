<?php
//X(n + 1) = (a * X(n) + c) % m

$seed=time();

function myRand($z){
$a=16807;
$c=0;
$m=2147483647;
$q=$m/$a;
$r=$m%$a;
$z=$a*($z%$q)-$r*round($z/$q)+$c;
if ($z<0){
$z=$z+$m;
}
return $z;
}



echo rand()."\n";
echo myRand($seed)."\n";


