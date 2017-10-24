<?php
$aRemedyTripOrder= explode(',','0,4,2,1,5,3');
$aOrderPointIndex=array(2,0,1,3);
var_dump($aRemedyTripOrder); 
 if (!empty($aRemedyTripOrder)) {
                $aTempOrderPointIndex = array();
                if (isset($aOrderPointIndex[0]) && $aOrderPointIndex[0] == -1) {
                    array_push($aTempOrderPointIndex, $aOrderPointIndex[0]); // 载入司机位置
                    unset($aOrderPointIndex[0]);
                }
                $aDiffArr             = array_diff($aRemedyTripOrder, $aOrderPointIndex); // 注意不能互换位置
var_dump($aDiffArr);
                $aTempOrderPointIndex = array_merge($aTempOrderPointIndex, $aDiffArr);
                $aTempOrderPointIndex = array_merge($aTempOrderPointIndex, $aOrderPointIndex);
                $aOrderPointIndex     = $aTempOrderPointIndex;
            }

var_dump($aOrderPointIndex);
