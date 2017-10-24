<?php
class varFlight{
    const VARIFLIGHT_APPID = '10066';
    const APP_SECURITY     = '5498e74bb230e';
    const API_GET          = '/flight';
    const API_DYNAMIC_PUSH = '/addflightpush';
public function getData($fnum,$flightDate){ 
$data = array(
                'fnum'  => $fnum,
                'appid' => self::VARIFLIGHT_APPID,
                'date'  => $flightDate,
            );
  $token = $this->_createToken($data);
            $data['token'] = $token;
            $url ='http://open-al.variflight.com/api';
            $url .= self::API_GET;
            $url = $url.'?'.http_build_query($data);
echo $url;            
$ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// post数据
            curl_setopt($ch, CURLOPT_POST, 1);// post的变量
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $output = curl_exec($ch);
            curl_close($ch);

return $output;
}  

public function RegisterFlight($fNum , $flightDate , $dep , $arr){
$data = array(
                'fnum'  => $fNum,
                'appid' => self::VARIFLIGHT_APPID,
                'date'  => $flightDate,
                'dep'   => $dep,
                'arr'   => $arr,
            );

            $token = $this->_createToken($data);
            $data['token'] = $token;

   $url ='http://open-al.variflight.com/api';
            $url .= self::API_DYNAMIC_PUSH;
            $url = $url.'?'.http_build_query($data);
echo $url;
$ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// post数据
            curl_setopt($ch, CURLOPT_POST, 1);// post的变量
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $output = curl_exec($ch);
            curl_close($ch);

return $output;
}

 private function _createToken($data) {
        ksort($data);
        foreach($data as $k=>$v){
            $strtomd5[]=$k.'='.$v;
        }
        $token= md5(md5(implode('&',$strtomd5).self::APP_SECURITY));
        return $token;
    }
}

$a=new  varFlight();
var_dump($a->getData('CA1352','2017-06-13'));
