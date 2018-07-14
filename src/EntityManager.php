<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\SerializerInterface;
use Makssiis\WunderList\Annotation\Resolver;
use Makssiis\WunderList\Exception\WunderListHttpException;

/**
 * Class EntityManager
 * @package Makssiis\WunderList
 */
class EntityManager
{
    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var Resolver
     */
    private $resolver;

    /**
     * WunderListApi constructor.
     *
     * @param Client              $httpClient
     * @param SerializerInterface $serializer
     * @param Resolver            $resolver
     */
    public function __construct(Client $httpClient, SerializerInterface $serializer, Resolver $resolver)
    {
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
        $this->resolver = $resolver;
    }

    /**
     * @param        $requestEntity
     * @param string $responseEntity
     * @param bool   $deserialize
     *
     * @return array|\JMS\Serializer\scalar|object
     * @throws \ReflectionException
     */
    public function get($requestEntity, string $responseEntity, bool $deserialize = true)
    {
        $uri = $this->resolver->getUri(\get_class($requestEntity));

        if (null === $uri) {
            throw new \LogicException('"requestEntity" should have the RequestUri annotation');
        }

        $guzzleOptions = [];

        $queryParameters = $this->resolver->getQueryParameters($requestEntity);
        if (!empty($queryParameters)) {
            $guzzleOptions['query'] = $queryParameters;
        }

        try {
            $result = $this->httpClient->get($uri, $guzzleOptions);
        } catch (GuzzleException $exception) {
            throw new WunderListHttpException($exception->getMessage(), $exception->getCode(), $exception);
        }

        if (true === $deserialize) {
            return $this->serializer->deserialize($result->getBody()->getContents(), $responseEntity, 'json');
        }

        return new $responseEntity($result->getBody()->getContents());
    }
}
