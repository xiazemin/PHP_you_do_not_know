<?php
$y = date("Y");
 
//获取当天的月份
$m = date("m");
 
//获取当天的号数
$d = date("d");
 
//将今天开始的年月日时分秒，转换成unix时间戳(开始示例：2015-10-12 00:00:00)
echo $todayTime=date( "Y-m-d H:i:s",mktime(18,0,0,$m,$d,$y));
