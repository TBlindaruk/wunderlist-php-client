<?php

require_once __DIR__ . '/../vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$wunderListApi = new \Makssiis\WunderList\WunderListApi(
    new \Makssiis\WunderList\EntityManager(
        new \GuzzleHttp\Client(
            [
                'base_uri' => 'https://a.wunderlist.com/api/v1/',
                'headers' => [
                    'X-Access-Token' => 'a9f10a8cc521b5c1509b49a0ad31310a701640c195657d227576eaecc11c',
                    'X-Client-ID' => '4c3d6ac35a6a4dfde5c3',
                ],
            ]
        ),
        JMS\Serializer\SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(
                    new \JMS\Serializer\Naming\CamelCaseNamingStrategy()
                )
            )
            ->build(),
        new \Makssiis\WunderList\Annotation\Resolver(
            new \Doctrine\Common\Annotations\AnnotationReader()
        )
    )
);

try {
    var_dump($wunderListApi->getTaskFiles(new \Makssiis\WunderList\RequestEntity\TaskFiles(4031412399)));
} catch (Throwable $throwable) {
    echo $throwable->getMessage();
}

echo 'success';
