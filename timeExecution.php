<?php

class timeExecution
{
    /**
     * @return float
     */
    public static function start()
    {
        echo str_repeat("=", 100) . PHP_EOL;
        $timeStart = microtime(true);
        echo "\033[01;31m[ START ] Memory: " . memory_get_peak_usage() . " (" . ((memory_get_peak_usage() / 1024) / 1024) . " MB \033[0m)" . PHP_EOL;
        echo str_repeat("=", 100) . PHP_EOL;

        return $timeStart;
    }

    /**
     * @param $timeStart
     * @return float
     */
    public static function end($timeStart)
    {
        echo str_repeat("=", 100) . PHP_EOL;
        $timeEnd = microtime(true);
        $executionTime = ($timeEnd - $timeStart);
        echo "\033[01;31m[ FINISH ] Memory: " . memory_get_peak_usage() . " (" . ((memory_get_peak_usage() / 1024) / 1024) . " MB)\033[0m)" . PHP_EOL;
        echo "\033[01;31m Total Execution Time: " . $executionTime . " \033[0m)" . PHP_EOL;
        echo str_repeat("=", 100) . PHP_EOL;

        return $executionTime;
    }
}
