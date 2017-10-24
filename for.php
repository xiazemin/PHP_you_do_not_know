<?php
$a=array('a','b');
for ($i=0;$i<count($a);$i++){
$a[$i+3]=$i;
var_dump($a);
}
