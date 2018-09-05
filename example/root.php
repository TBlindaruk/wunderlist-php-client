<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. Get root
try {
    var_dump($wunderListApi->root()->get());
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';
