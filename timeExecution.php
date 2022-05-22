<?php

class timeExecution
{
    /**
     * @return float
     */
    public static function start()
    {
        self::printColor(str_repeat("=", 100) . PHP_EOL);
        $timeStart = microtime(true);
        self::printColor("Memory: " . memory_get_peak_usage(true) . " (" . ((memory_get_peak_usage(true) / 1024) / 1024) . " MB)" . PHP_EOL);
        self::printColor(str_repeat("=", 100) . PHP_EOL);

        return $timeStart;
    }

    /**
     * @param $timeStart
     * @return float
     */
    public static function end($timeStart)
    {
        $timeEnd = microtime(true);
        $executionTime = ($timeEnd - $timeStart);
        self::printColor("Memory: " . memory_get_peak_usage(true) . " (" . ((memory_get_peak_usage(true) / 1024) / 1024) . " MB)" . PHP_EOL);
        self::printColor(str_repeat("=", 100) . PHP_EOL);
        self::printColor("Total Execution Time: " . $executionTime . PHP_EOL, 'info');
        self::printColor(str_repeat("=", 100) . PHP_EOL);

        return $executionTime;
    }

    /**
     * @param $str
     * @param $type
     * @return void
     */
    public static function printColor($str, $type = 'success')
    {
        switch ($type) {
            case 'error':
                echo "\033[31m$str \033[0m\n";
                break;
            case 'success':
                echo "\033[32m$str \033[0m\n";
                break;
            case 'warning':
                echo "\033[33m$str \033[0m\n";
                break;
            case 'info':
                echo "\033[36m$str \033[0m\n";
                break;
            default:
                break;
        }
    }
}
