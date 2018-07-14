<?php

require_once __DIR__ . '/../vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$wunderListApi = new \Makssiis\WunderList\WunderListApi(
    new \GuzzleHttp\Client(
        [
            'base_uri' => 'https://a.wunderlist.com/api/v1/',
            'headers' => [
                'X-Access-Token' => '8338272ce8707263f7f438b9182b22a0f40204ac3cb2896cabb200515be5',
                'X-Client-ID' => '631d76a77068d68b4c8f',
            ],
        ]
    ),
    JMS\Serializer\SerializerBuilder::create()
        ->setPropertyNamingStrategy(
            new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(
                new \JMS\Serializer\Naming\CamelCaseNamingStrategy()
            )
        )
        ->build()
);

var_dump($wunderListApi->getTaskFiles(4031412399));

echo 'success';
