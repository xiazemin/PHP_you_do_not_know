<?php
//创建mysqli对象方式 1
//屏蔽连接产生的错误
$mysqli = new mysqli('127.0.0.1', 'root', '12345678', 'didicar');

//只能用函数来判断是否连接成功
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
}
//var_dump($mysqli);
//创建mysqli对象方式 2 可以设置一些参数
//
 $starttime = explode(' ',microtime());
 echo microtime();
 /*········以下是代码区·········*/
$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 0.000002);//设置超时时间
$mysqli->real_connect('127.0.0.1', 'root', '12345678', 'didicar');
echo("错误描述: " . mysqli_error($mysqli)); 
$result = $mysqli->query("select * from didiorder");
/*········以上是代码区·········*/
 //程序运行时间
 $endtime = explode(' ',microtime());
 $thistime = $endtime[0]+$endtime[1]-($starttime[0]+$starttime[1]);
 $thistime = round($thistime,3);
 echo "本执行耗时：".$thistime;
/*var_dump($result->row_array());
do{
    $result = $mysqli->store_result();#获取当前光标所在的结果集
 var_dump($result);   
    $data = $result->fetch_all();//fetch_all();
    
    ee($data);
    
}while($mysqli->next_result());#光标移动到下一个结果集
*/
var_dump($result->fetch_row());
mysqli_close($mysqli); 
