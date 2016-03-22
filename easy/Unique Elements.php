<?php
$fh = fopen($argv[1], 'r');
while (false !== ($elements = fgets($fh))) {
    echo implode(array_unique(explode(',', trim($elements))), ',') . PHP_EOL;
}
