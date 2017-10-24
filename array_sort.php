<?php
$b=array('kk'=>1,'nc'=>array("a"=>22,"23"=>8,'4'=>2222,'df'=>123));
asort($b['nc']);
var_dump($b);
ksort($b['nc']);
var_dump($b);

$a=array("a"=>22,"23"=>8,'4'=>2,'df'=>123);
var_dump($a);
asort($a);
var_dump($a);
$sjson='{"msg from config":{"arrive_msg":{"pushTips":"司机点击了到达，您可与司机确认上车点。","pushTips_bubble":"司机点击了到达，您可与司机确认上车点。","not_arrived_right_pos":1,"pushTips_passenger_late":"司机已等待超过3分钟，您已迟到。行程中可能加入拼友，为避免拼友等待，您迟到后司机可无责取消订单。","service_control_wait_time":"3","pushTips_passenger_late_bubble":"您已迟到，请尽快与司机联系上车","is_service_control":1},"content":"司机点击了到达，您可与司机确认上车点。"},"msg from dmc":{"arrive_msg":{"pushTips":"司机点击了到达，您可与司机确认上车点","pushTips_bubble":"司机点击了到达，您可与司机确认上车点","pushTips_passenger_late":"司机已等待超过3分钟，您已迟到。行程中可能加入拼友，为避免拼友等待，您迟到后司机可无责取消订单。","pushTips_passenger_late_bubble":"您已迟到，请尽快与司机联系上车","service_control_wait_time":3,"is_service_control":1,"not_arrived_right_pos":1},"content":"司机点击了到达，您可与司机确认上车点"}}';

$ajson=json_decode($sjson,true);
var_dump($ajson['msg from config']);
var_dump(asort($ajson['msg from config']['arrive_msg']));
var_dump($ajson['msg from config']);
asort($ajson['msg from dmc']['arrive_msg']);
var_dump($ajson['msg from dmc']);
var_dump(md5(json_encode($ajson['msg from config']))==md5(json_encode($ajson['msg from dmc'])));
echo "\n\n ";
var_dump(md5(json_encode(sort($ajson['msg from config'])))==md5(json_encode(sort($ajson['msg from dmc']))));
