<?php
$a=array();
$n=128;
for($i=0;$i<500000;$i++){
for($j=0;$j<$n;$j++){
   if($j==$i%$n){
  $a[$j]++;
}
 }
}
var_dump($a);

