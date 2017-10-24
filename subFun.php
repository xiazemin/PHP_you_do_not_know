<?php
namespace Sub;
class Test{
public static function test(){

$trace=debug_backtrace();
var_dump($trace);

  $uri=end($trace);
        $aName = explode('/', $uri['file']);
var_dump($aName);
var_dump(end($aName));

$re=debug_print_backtrace();
var_dump($re);

 $aTrace=debug_backtrace();
        $aUri=end($aTrace);
        $aPathName = explode('/', $aUri['file']);
        $sFileName=end($aPathName);

var_dump($sFileName);
$aFileName=explode('.',$sFileName);
        $sFileName=$aFileName[0];
var_dump($sFileName);
}
}
