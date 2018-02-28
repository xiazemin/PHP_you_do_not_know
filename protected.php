<?php
class base{
protected $a; 
function __construct(){
$this->change();
}

protected function change(){
$this->a=123;
}
}


class drived extends base
{

protected function change(){
$this->a=456;
}
public function echoa()
{
var_dump($this->a);
}
}


$d=new drived();
$d->echoa();

