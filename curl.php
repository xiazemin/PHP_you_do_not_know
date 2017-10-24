<?php
//初始化
$ch=curl_init();
//设置选项，包括URL
curl_setopt($ch,CURLOPT_URL, "http://localhost:8080/getPost.php?boolkey=false");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_HEADER, 0);
//执行并获取HTML文档内容
$output= curl_exec($ch);
//释放curl句柄
curl_close($ch);
//打印获得的数据
print_r($output);

$url= "http://localhost:8080/getPost.php";
$post_data= array("username" => "bob","key" => "12345",'boolkey'=>false,'btrue'=>true,'json'=>json_encode(array('jsonboolkey'=>false)));
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
//post数据
curl_setopt($ch,CURLOPT_POST, 1);
//post的变量
curl_setopt($ch,CURLOPT_POSTFIELDS, $post_data);
$output= curl_exec($ch);
curl_close($ch);
//打印获得的数据
print_r($output);
