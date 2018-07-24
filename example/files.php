<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. Get files of list
try {
    var_dump($wunderListApi->getListFiles(340148101));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

// 2. Get files of task
try {
    var_dump($wunderListApi->getTaskFiles(4031412399));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

// 3. Get specific file
try {
    var_dump($wunderListApi->getFile(44959175));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

// 4. Destroy specific file
try {
    var_dump($wunderListApi->destroyFile(44968264,1));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';
