<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\Serializer;
use Makssiis\WunderList\RequestEntity\Avatar;
use Makssiis\WunderList\ResponseEntity\AvatarImg;
use Makssiis\WunderList\ResponseEntity\File;
use Makssiis\WunderList\ResponseEntity\Files;

/**
 * Class WunderListApi
 *
 * @package Makssiis\WunderList
 */
class WunderListApi
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
    public function getAvatar(Avatar $entity): AvatarImg
    {
        $urlParameter = $this->serializer->toArray($entity);

        try {
            $result = $this->httpClient->get('avatar', ['query' => $urlParameter]);
        } catch (GuzzleException $exception) {
            throw $exception;
        }

        return new AvatarImg($result->getBody()->getContents());
    }

    /**
     * @param int $taskId
     *
     * @return Files
     */
    public function getTaskFiles(int $taskId): Files
    {
        $result = $this->httpClient->get('files', ['query' => ['task_id' => $taskId]]);

        $files = $this->serializer->deserialize(
            $result->getBody()->getContents(),
            'array<' . File::class . '>',
            'json'
        );

        return new Files($files);
    }
}
