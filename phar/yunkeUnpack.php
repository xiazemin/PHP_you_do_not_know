<?php
/**
 * Created by yunke.
 * User: yunke
 * Date: 2017/2/9
 * Time: 19:02
 */
 
$phar = new Phar('yunke.phar');
$phar->extractTo('yunke'); //提取一份原项目文件
$phar->convertToData(Phar::ZIP); //另外再提取一份，和上行二选一即可
