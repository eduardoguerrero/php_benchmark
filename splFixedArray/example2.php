<?php

include_once __DIR__ . '/../timeExecution.php';
$timeStart = timeExecution::start();

$x = 0;
$data = new SplFixedArray(100000);
for ($i = 0; $i < 100000; $i++) {
    $data[$i] = ['id' => $x, 'value' => $i];
    $x++;
}

timeExecution::end($timeStart);
