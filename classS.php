<?php

class parentClass{
//protected
private static $map=array(1=>'sub1',2=>'sub2');
private static $instance=NULL;

public static function getInstance($i){
//if(self::$instance==NULL){
$classz=self::$map[$i]; 
self::$instance=new $classz($i);
//}
return self::$instance;
}

private function __construct($i){
echo "parent\n";
/*var_dump($i);
var_dump($this->map);
var_dump($this->map[$i]);
*/
/*$classz=$this->map[$i];
var_dump($classz);
var_dump($$classz);
return new $classz($i);
*/
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

$a=parentClass::getInstance(1);
$a->test();
$a=parentClass::getInstance(2);
$a->test();
echo"\n";


class sub3{
public function test(){
echo "\nsub3\n";
}
}

class sub4{
public function test(){
echo "\nsub4\n";
}
}
$d=array(1=>'sub3',2=>'sub4');

foreach($d as $k=>$i){
$j=new $i();
var_dump($i);
var_dump($j);
$j->test();
}
echo"\n";

$c='hhhhh';
$b='c';
echo "\n".$$b;
