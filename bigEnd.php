<?php
define('BIG_ENDIAN', pack('L', 1) === pack('N', 1));

if (BIG_ENDIAN)
{
    echo "大端序";
}
else
{
    echo "小端序";
}

echo "\n";
