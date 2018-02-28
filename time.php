<?php
date_default_timezone_set("Etc/GMT");
echo date("Y-m-d H:i:s",time());
echo "\n";
echo strtotime("2017-11-15 15:59:10");
echo "\n";
date_default_timezone_set("Asia/Shanghai");
echo date("Y-m-d H:i:s",time());
echo "\n";
echo strtotime("2017-11-15 15:59:10");
echo "\n";

date_default_timezone_set("Etc/GMT");
echo date("Y-m-d H:i:s",1510761550);
echo "\n";
date_default_timezone_set("Asia/Shanghai");
echo date("Y-m-d H:i:s",1510761550);
echo "\n";
