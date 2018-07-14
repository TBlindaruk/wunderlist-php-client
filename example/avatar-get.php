<?php

require_once __DIR__ . '/../vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$avatarManager = new \Makssiis\WunderList\WunderListApi(
    new \Makssiis\WunderList\EntityManager(
        new \GuzzleHttp\Client(['base_uri' => 'https://a.wunderlist.com/api/v1/',]),
        JMS\Serializer\SerializerBuilder::create()->build(),
        new \Makssiis\WunderList\Annotation\Resolver(
            new \Doctrine\Common\Annotations\AnnotationReader()
        )
    )
);

$avatarEntity = new \Makssiis\WunderList\RequestEntity\Avatar(0);
$avatarEntity->setSize(123123123122);

$response = $avatarManager->getAvatar($avatarEntity);
echo $response->getBlob();

echo 'success';
