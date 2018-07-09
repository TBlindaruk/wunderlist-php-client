<?php

declare(strict_types = 1);

namespace Makssiis\WunderList\Avatar;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\Serializer;
use Makssiis\WunderList\Avatar\RequestEntity\Avatar;
use Makssiis\WunderList\Avatar\ResponseEntity\AvatarImg;

/**
 * Class AvatarManager
 * @package Makssiis\WunderList\Avatar
 */
class AvatarManager
{
    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * AvatarManager constructor.
     *
     * @param Client     $httpClient
     * @param Serializer $serializer
     */
    public function __construct(Client $httpClient, Serializer $serializer)
    {
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
    }

    /**
     * @param Avatar $entity
     *
     * @return AvatarImg
     * @throws \Exception
     */
    public function get(Avatar $entity): AvatarImg
    {
        $urlParameter = $this->serializer->toArray($entity);

        try {
            $result = $this->httpClient->get('avatar', ['query' => $urlParameter]);
        } catch (GuzzleException $exception) {
            throw $exception;
        }

        return new AvatarImg($result->getBody()->getContents());
    }
}
