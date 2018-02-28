#!/bin/bash

s="http://www.zonetec.cn/WlanAuth/portal.do?appid=aaaa&apidx=0"

parse(){

 echo $1 | sed 's/.*'$2'=\([[:alnum:]]*\).*/\1/'

}



value=$(parse $s "appid")

echo $value
