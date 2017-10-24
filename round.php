<?php

$a=1.49;
$b=1.51;
echo date('Y-m-d H:i:s',time()),"\n";
echo round($a),"\t",round($b),"\n";
echo floor(331/60.0)*60,"\n";

echo round((strtotime('2017-06-16 03:58:51')-time())),"\n";
echo floor((strtotime('2017-06-16 03:58:51')-time())),"\n";

echo round((strtotime('2017-06-16 03:58:51')-time())/60),"\n";
echo floor((strtotime('2017-06-16 03:58:51')-time())/60);
