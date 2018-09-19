<?php
namespace name;
namespace name;
use name\test\config as testConfig;
//use name\test\config as testConfig;
namespace name;
use name\test\config as testConfig;
class config {
public function __construct(){
var_dump(new testConfig());
}

}
namespace name\test;
class config {

}
namespace name;
use name\test\config as testConfig;
class Test {
public function __construct(){
var_dump(new testConfig());
//var_dump(new config());
}
}
//require "name.php";
//require "nameTest.php";
//require "name_Test.php";

$a=new \name\config();
var_dump($a);

//$e=new \name\testConfig();var_dump($e);
//die();
$b=new \name\Test();
var_dump($b);
$c =new \name\test\config();
var_dump($c);
