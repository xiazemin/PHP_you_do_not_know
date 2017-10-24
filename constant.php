<?php
 error_reporting(E_ALL);
class a{
const C=1;
}

class b{
private $oA;
public function getC(){
$this->oA=new a();
echo $this->oA::C;
//echo $this->oA->C;
}
}

$oB=new b();

$oB->getC();

