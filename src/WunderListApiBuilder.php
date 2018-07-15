<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use Makssiis\WunderList\Annotation\Resolver;

/**
 * Class WunderListApiBuilder
 * @package Makssiis\WunderList
 */
class WunderListApiBuilder
{
    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return WunderListApi
     * @throws \Doctrine\Common\Annotations\AnnotationException
     */
    public function build():WunderListApi
    {
        AnnotationRegistry::registerLoader('class_exists');

        $entityManager = new EntityManager(
            new Client(
                [
                    'base_uri' => 'https://a.wunderlist.com/api/v1/',
                    'headers' => [
                        'X-Access-Token' => '693743f568afc7f237f8b3ddffb491fae6f535e09788d02d374ff75d3e9e',
                        'X-Client-ID' => '1c0db5a06a93d32190fb',
                    ],
                ]
            ),
            SerializerBuilder::create()
                ->setPropertyNamingStrategy(
                    new SerializedNameAnnotationStrategy(
                        new CamelCaseNamingStrategy()
                    )
                )
                ->build(),
            new Resolver(
                new AnnotationReader()
            )
        );

        return new WunderListApi($entityManager);
    }
}
