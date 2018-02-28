<?php
function getOd($k){
for($i=2;$i<=round(sqrt($k));$i++){
if($k%$i==0){
//echo $i;
return false;
}
}
return true;
}

var_dump(getOd(1021));

//echo "1234567";
for($i=2042;$i>=1020;$i--){
//echo "\n\n".$i."\n\n";
//var_dump(getOd($i));
if(getOd($i)){

echo "\n\n".$i."\n\n";
break;
}

}

$a=array();
for ($i=0;$i<2039*1000;$i++){
if($i%2039==0){
$a[$i%1021]++;
}
}
ksort($a);
foreach ($a as $k=>$v) {
echo $k .":". $v ."\n";
}
