<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

echo '----------------LIST OF NOTES FOR TASK -------------------';
try {
    var_dump($lists = $wunderListApi->note()->getAllForTask(3979851817));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo '----------------LIST OF NOTES FOR LIST -------------------';
try {
    var_dump($notes = $wunderListApi->note()->getAllForList(259807475));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo '----------------GET A SPECIFIC NOTE -------------------';

var_dump($wunderListApi->note()->get($notes[0]->getId()));

echo '----------------CREATE NOTE -------------------';

var_dump($wunderListApi->note()->create(4000847920,'asdasd'));

echo 'success';

