<?php
/**
 * Created by yunke.
 * User: yunke
 * Date: 2017/2/10
 * Time: 9:17
 */
require "lib/lib_a.php";
show();
 
$str = isset($_GET["str"]) ? $_GET["str"] : "hello world";
include "template/msg.html";
