<?php
class base{
private $a;
protected $b;
protected $c;
private $d=1;
protected function seta(){
echo "base";
$this->a=1234;
var_dump($this->a);
$this->b=12345;
var_dump($this->b);
$this->c=123456;
var_dump($this->c);
var_dump($this->d);
}
protected function setb(&$a)
{
$a=99;
}
}

class drived extends base{
private $a=123;
protected $c=1234567;
private $d=2;
public function echoA(){
$this->seta();
echo 'drived';
var_dump($this->a);
var_dump($this->b);
var_dump($this->c);
$this->setb($this->a);
var_dump($this->a);
}
}

$b=new drived();
$b->echoA();

class drived2 extends base{
private $a=123;
protected $c=1234567;
public function echoA(){
echo 'drived2';
var_dump($this->a);
var_dump($this->b);
var_dump($this->c);
}
}

$b=new drived2();
$b->echoA();
