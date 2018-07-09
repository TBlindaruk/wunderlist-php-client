<?php

require_once __DIR__ . '/../vendor/autoload.php';

$wunderListApi = new \Makssiis\WunderList\WunderListApi(
    new \GuzzleHttp\Client(['base_uri' => 'https://a.wunderlist.com/api/v1/',]),
    JMS\Serializer\SerializerBuilder::create()->build()
);

$wunderListApi->getTaskFiles(100);

echo 'success';
