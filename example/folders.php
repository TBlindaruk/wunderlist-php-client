<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. Get folders
try {
    var_dump($wunderListApi->getFolders());
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

// 2. Get a specific folder
try {
    var_dump($wunderListApi->getFolder(9496358));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';
