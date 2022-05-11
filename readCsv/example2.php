<?php

require_once 'timeExecution.php';
$timeStart = timeExecution::start();

/**
 * Get csv data
 *
 * @return Generator
 */
function getRows()
{
    $handle = fopen("readCsv/Fielding500000.csv", "r");
    while (!feof($handle)) {
        // Parse data from a CSV file, generator will save state and can be resumed when the next value is required
        yield fgetcsv($handle, 4096);
    }
    fclose($handle);
}

// Get rows and do something with $data rows
$data = getRows();
$row = 0;
foreach (getRows() as $item) {
    // Apply a filter or seek something
    if ($row === 500000) {

    }
    $row++;
}
echo 'Total rows: ' . iterator_count(getRows()) . PHP_EOL;

timeExecution::end($timeStart);
