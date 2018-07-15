<?php

require_once __DIR__ . '/../vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$wunderListApi = new \Makssiis\WunderList\WunderListApi(
    new \Makssiis\WunderList\EntityManager(
        new \GuzzleHttp\Client(
            [
                'base_uri' => 'https://a.wunderlist.com/api/v1/',
                'headers' => [
                    'X-Access-Token' => '693743f568afc7f237f8b3ddffb491fae6f535e09788d02d374ff75d3e9e',
                    'X-Client-ID' => '1c0db5a06a93d32190fb',
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
