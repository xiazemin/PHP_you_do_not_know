<?php
$a='1245';
var_dump(is_string($a));
//bool(true)
function isJson( $str )
{
  json_decode($str);
 return (json_last_error() === JSON_ERROR_NONE);
}

var_dump(isJson($a));
//bool(true)
var_dump(json_decode($a));
//int(1245)
