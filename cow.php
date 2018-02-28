<?php
$foo['love'] = 1;
 $bar = &$foo['love'];
debug_zval_dump($foo);
 $tipi = $foo; 
debug_zval_dump($foo);
$tipi['love'] = '2'; 
debug_zval_dump($foo);
echo $foo['love'];
echo $bar;

debug_zval_dump($foo);
debug_zval_dump($bar);
debug_zval_dump($tipi);
