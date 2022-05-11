<?php

include_once __DIR__.'/../timeExecution.php';
$timeStart = timeExecution::start();

/**
 * Get csv data
 *
 * @return array
 */
function getRows()
{
    $data = [];
    $handle = fopen(__DIR__."/Fielding500000.csv", "r");
    while (!feof($handle)) {
        $row = fgetcsv($handle, 4096);
        $data[] = $row;
    }
    fclose($handle);

    return $data;
}

// Get rows and do something with $data rows
$data = getRows();
$row = 0;
foreach ($data as $item) {
    // Apply a filter or seek something
    if ($row === 500000) {

    }
    $row++;
}
echo 'Total rows: ' . count($data) . PHP_EOL;

timeExecution::end($timeStart);
