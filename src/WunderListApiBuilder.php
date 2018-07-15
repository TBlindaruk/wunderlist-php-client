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
                        'X-Access-Token' => 'cbc35a405f4b6a7d2d978bd672cfb4eb2c0dcd3789b4dac8ad7740616981',
                        'X-Client-ID' => '7cfcc24b9a666516e5ce',
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
