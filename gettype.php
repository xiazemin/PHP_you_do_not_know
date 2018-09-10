<?php
$a='123';
var_dump((integer)$a);
$b=4;
$Type=gettype($b);
var_dump($$Type);
var_dump(($$Type)$a);
