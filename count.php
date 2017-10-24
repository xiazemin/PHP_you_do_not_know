<?php
$arr=array(
                 0=>array('title' => '新闻1', 'viewnum' => 123, 'content' => 'ZAQXSWedcrfv'),
                 1=>array('title' => '新闻2', 'viewnum' => 99, 'content' => 'QWERTYUIOPZXCVBNM')
               );
echo '不统计多维数组：'.count($arr,0);//count($arr,COUNT_NORMAL)
echo "<br/>";
echo '统计多维数组：'.count($arr,1);//count($arr,COUNT_RECURSIVE)
?>
