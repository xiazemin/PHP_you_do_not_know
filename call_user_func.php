<?php
class a {  
  static  function b($c)  
    {  
        echo $c;  
    }  
}  
call_user_func(['a','b'],'121');         
echo "\n";
call_user_func(array("a", "b"),"111"); 
