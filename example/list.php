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


echo '----------------CREATE A LIST ------------------------';

var_dump($newList = $wunderListApi->list()->create('FIRST TRY'));


echo '---------------UPDATE A LIST ------------------------';

var_dump($wunderListApi->list()->update($newList->getId(), $newList->getRevision(),'ew'));
echo 'success';

