<?php
//02-8.php?id=2;}phpinfo();/*
$id=$_GET['id'];
$str2='echo  '.$a.'test'.$id.";";
echo $str2;
echo "<br/>";
echo "==============================";
echo "<br/>";
$f1 = create_function('$a',$str2);
echo "<br/>";
echo "==============================";
?>
