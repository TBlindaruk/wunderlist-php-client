<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = $wunderListApi = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

// 1. Get folders
try {
    var_dump($wunderListApi->folder()->getList());
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

// 2. Get a specific folder
try {
    var_dump($wunderListApi->folder()->get(9496358));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

try {
    // 3. Create a folder and update
    $value = $wunderListApi->folder()->create('First Try', [1, 2]);

    // 4. Update a folder
    $value2 = $wunderListApi->folder()->update($value->getId(), $value->getRevision(), 'REnamed');

    echo $wunderListApi->folder()->delete($value2->getId(), $value2->getRevision());

} catch (\Throwable $throwable) {
    echo $throwable->getMessage();
}

echo '------FOLDER-REVISIONS--------------';

try {
    var_dump($wunderListApi->folder()->getRevisions());
} catch (\Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';
