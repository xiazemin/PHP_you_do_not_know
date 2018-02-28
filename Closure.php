<?php
function getCounter() {
$i = 0;
return function() use($i) { // 这里如果使用引用传入变量: use(&$i)
echo ++$i."\n"; };
}
$counter = getCounter();
$counter(); // 1 
$counter(); // 1

function getCounter1() {
$i = 0;
return function($i) { // 这里如果使用引用传入变量: use(&$i)
echo ++$i."\n"; };
}

$counter1 = getCounter1();
$counter1(); // 1
$counter1(); // 1
