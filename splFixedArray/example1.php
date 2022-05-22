<?php

include_once __DIR__ . '/../timeExecution.php';
$timeStart = timeExecution::start();

function generateData()
{
    $x = 0;
    $data = [];
    for ($i = 0; $i < 100000; $i++) {
        $data[$i] = ['id' => $x, 'value' => $i];
        $x++;
    }

    return $data;
}

// To do something with $data variable
echo "Total items: " . count(generateData()) . PHP_EOL;

timeExecution::end($timeStart);
