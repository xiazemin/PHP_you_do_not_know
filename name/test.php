<?php
require "name.php";
require "nameTest.php";
require "name_Test.php";

$a=new name\config();
var_dump($a);
$b=new name\Test();
var_dump($b);
$c =new name\test\config();
var_dump($c);
