<?php
$ao=["a"=>1,"b"=>2,];
function testArray($a){
$a['a']=3;
$a['c']=4;
}
testArray($ao);
var_dump($ao);
#testArray(clone (object)$ao);
function testArray1(&$a){
$a['a']=3;
$a['c']=4;
}
testArray1($ao);
var_dump($ao);
$arr = array('a','b','c','d');
unset($arr[1]);
print_r($arr);

$arr = array('a','b','c','d'); 
array_splice($arr,1,1); 
print_r($arr); 


$li=[array('a'=>1,'b'=>2),array('a'=>2,'b'=>3)];

foreach ($li as $i){
$i['a']=5;
}
var_dump($li);
echo count($li);
echo '\n';
echo sizeof($li);

echo "\n";
$arr=array('12'=>'q','23'=>'qa','wa','wb','22324'=>'1343','ed');
var_dump($arr);

echo "\n";
$arr=array('a'=>'q','b'=>'qa','wa','wb','22324'=>'1343','ed');
var_dump($arr);

$a=array();
$b=array('a'=>1,'b'=>2);
$c=array_merge($a,$b);
var_dump(array_merge($a,$b));
var_dump(array_merge($b,$a));
var_dump($c);
$a=array_merge($a,$b);
var_dump($a);

$d=array('c'=>1,'d'=>array('q'=>1,'p'=>2));
var_dump(NULL,$d);
var_dump(array_merge($a,$d));
