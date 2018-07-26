<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. get all lists
echo '----------------LIST OF LIST -------------------';
try {
    var_dump($lists = $wunderListApi->list()->getAll());
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo '---------------GET A SPECIFIC LIST -------------------';

var_dump($wunderListApi->list()->get($lists[0]->getId()));
echo 'success';
