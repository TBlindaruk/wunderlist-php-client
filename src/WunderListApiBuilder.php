<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use Makssiis\WunderList\Annotation\Resolver;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

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
    public function build(): WunderListApi
    {
        AnnotationRegistry::registerLoader('class_exists');

        $entityManager = new EntityManager(
            new Client(
                [
                    'base_uri' => 'https://a.wunderlist.com/api/v1/',
                    'headers' => [
                        'X-Access-Token' => 'f6d6349453028cde743ffc117c480e4de450ee8514171676fda3e770bf9b',
                        'X-Client-ID' => 'df0cd9f7885c741288a2',
                    ],
                ]
            ),
            new Serializer(
                [new PropertyNormalizer(), new ArrayDenormalizer()],
                [new JsonEncoder()]
            ),
            new Resolver(
                new AnnotationReader()
            )
        );

        return new WunderListApi($entityManager);
    }
}
