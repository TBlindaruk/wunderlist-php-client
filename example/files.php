<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. Get files of list
try {
    var_dump($wunderListApi->getListFiles(new \Makssiis\WunderList\RequestEntity\Files\ListFiles(340148101)));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

// 2. Get files of task
try {
    var_dump($wunderListApi->getTaskFiles(new \Makssiis\WunderList\RequestEntity\Files\TaskFiles(4031412399)));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

// 3. Get specific file
try {
    var_dump($wunderListApi->getFile(new \Makssiis\WunderList\RequestEntity\Files\FileGet(44968264)));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

// 3. Get specific file
try {
    var_dump($wunderListApi->destroyFile(new \Makssiis\WunderList\RequestEntity\Files\FileDestroy(44968264,1)));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';
