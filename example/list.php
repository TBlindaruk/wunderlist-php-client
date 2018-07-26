<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. get all lists
try {
    var_dump($wunderListApi->list()->getAll());
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';
