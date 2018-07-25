<?php

require_once __DIR__ . '/../vendor/autoload.php';

$api = \Makssiis\WunderList\WunderListApiBuilder::create()->build();

$response = $api->avatar()->get(0,123123123123);
echo $response->getBlob();

echo 'success';
