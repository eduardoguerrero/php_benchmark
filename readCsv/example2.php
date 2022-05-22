<?php

include_once __DIR__ . '/../timeExecution.php';
$timeStart = timeExecution::start();

/**
 * @return Generator
 */
function getCsvRows()
{
    $handle = fopen(__DIR__ . "/Fielding500000.csv", "r");
    while (!feof($handle)) {
        // Parse data from a CSV file, generator will save state and can be resumed when the next value is required
        yield fgetcsv($handle, 4096);
    }
    fclose($handle);
}

// To do something with $data variable
$data = getCsvRows();
$row = 0;
foreach (getCsvRows() as $item) {
    // Apply a filter or seek something
    if ($row === 500000) {

    }
    $row++;
}
//echo 'Total rows: ' . iterator_count(getCsvRows()) . PHP_EOL;
timeExecution::end($timeStart);
