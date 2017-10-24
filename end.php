<?PHP
$array = array(1,2,4,6,8);
echo end($array);
?> 
 
<?PHP
$array = array(1,2,4,6,8);
echo array_pop($array);
var_dump($array);
?> 
 
<?PHP
$array = array(1,2,4,6,8);
$k = array_slice($array,-1,1);
print_r($k);　　//结果是一维数组
?>
