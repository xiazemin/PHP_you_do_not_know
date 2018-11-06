<?php
$b=json_decode("18446729590877577216");
var_dump($b);
//float(1.8446729590878E+19)
 var_dump(1.8446729590878E+19==$b);
//bool(false)
var_dump($b=="18446729590877577216");
//bool(true)
//var_dump 有format 所有序列化会损失精度
