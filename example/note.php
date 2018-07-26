<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. get all lists
echo '----------------LIST OF NOTES FOR TASK -------------------';
try {
    var_dump($lists = $wunderListApi->note()->getAllForTask(3979851817));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';

