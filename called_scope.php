<?php 
class A extends B {
public static function  funcA() 
{ static::funcB();
}
}
class B extends A {
public static function funcB() {
echo "B::funcB()"; }
} 

B::funcA();
