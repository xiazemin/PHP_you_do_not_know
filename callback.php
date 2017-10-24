<?php
function test($callBack){
$callBack(1);
}

function callbackF($i){
echo '1234';
echo "\n";
echo 1;
echo "\n";
}

test('callbackF');

//test (function('callbackF') use (1));
