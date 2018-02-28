<?php
class a{
public function one($str1, $str2)
 {
$this-> two("Glenn", "Quagmire");
 }
function two($str1, $str2)
 {
$this-> three("Cleveland", "Brown");
 }
function three($str1, $str2)
 {
// print_r(debug_backtrace());
 echo json_encode(debug_backtrace(false));
}
}
$a=new a();
$a->one("Peter", "Griffin");

