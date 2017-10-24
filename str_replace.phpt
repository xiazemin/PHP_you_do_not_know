--TEST--
str_replace() function
--FILE--
<?php
/**
 * 使用PHP-QA的.phpt做单元测试
 */

$str = 'Hello, all!';
echo(str_replace('all', 'world', $str));
?>
--EXPECT--
Hello, world!
