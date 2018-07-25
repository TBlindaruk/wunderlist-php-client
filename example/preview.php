<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. Get files of list
try {
    var_dump($wunderListApi->preview()->get(44959175,'web','retina'));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';
