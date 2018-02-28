<?php
$func = create_function('', 'echo "Hello";');
$my_func_name = 'lambda_1';
debug_zval_dump($func); // string(9) "lambda_1" refcount(2) 
debug_zval_dump($my_func_name); // string(8) "lambda_1" refcount(2)
$my_func = chr(0) . "lambda_1"; 
$my_func(); // Hello
