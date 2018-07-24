<?php

require_once __DIR__ . '/../vendor/autoload.php';

$api = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

$avatarEntity = new \Makssiis\WunderList\RequestEntity\Avatar(0);
$avatarEntity->setSize(123123123122);

$response = $api->avatar()->get($avatarEntity);
echo $response->getBlob();

echo 'success';
