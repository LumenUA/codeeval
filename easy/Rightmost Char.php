<?php
$strings = file($argv[1]);
foreach ($strings as $str) {
    list($haystack, $needle) = explode(',', rtrim($str, "\n"));
    $res = strrpos($haystack, $needle);
    echo ($res !== false) ? "$res\n": "-1\n";
}
?>
