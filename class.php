<?php

class parentClass{
//protected
public $map=array(1=>'sub1',2=>'sub2');
public function __construct($i){
echo "parent\n";
/*var_dump($i);
var_dump($this->map);
var_dump($this->map[$i]);
*/
$classz=$this->map[$i];
var_dump($classz);
var_dump($$classz);
return new $classz($i);
}
}

class sub1 extends parentClass{
public function test(){
echo "\nsub1\n";
}
}

class sub2 extends parentClass{
public function test(){
echo "\nsub2\n";
}
}

$a=new parentClass(1);
$a->test();
$a=new parentClass(2);
$a->test();


