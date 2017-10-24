<?php
$a=array(true,false);
$b=json_decode(json_encode($a),true);
var_dump($a);
var_dump($b);

$a=array('a'=>true,'b'=>false);
$b=json_decode(json_encode($a),true);
var_dump($a);
var_dump($b);
echo json_encode($b);
