<?php

echo "REST API START PROJECT";

$arr = [123, 123, 51, 24, 51, 24, 51];
$arr = array_unique($arr);
$arr = array_values($arr);
sort($arr);

var_dump($arr);


echo PHP_VERSION;

echo phpversion();
