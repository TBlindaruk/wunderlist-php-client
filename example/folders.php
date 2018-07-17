<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. Get files of folders
try {
    var_dump($wunderListApi->getFolders());
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}


echo 'success';
