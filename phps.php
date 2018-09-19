<?php
if(preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])){
echo "jpg";
}else{
phpinfo();
}

