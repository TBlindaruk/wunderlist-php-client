<?php

require_once __DIR__ . '/../vendor/autoload.php';

$avatarManager = new \Makssiis\WunderList\Avatar\AvatarManager(
    new \GuzzleHttp\Client(['base_uri' => 'https://a.wunderlist.com/api/v1/',]),
    JMS\Serializer\SerializerBuilder::create()->build()
);

$avatarEntity = new \Makssiis\WunderList\Avatar\RequestEntity\Avatar(0);
$avatarEntity->setSize(123123123123);

$response = $avatarManager->get($avatarEntity);
echo $response->getBlob();

echo 'success';
