<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\Serializer;
use Makssiis\WunderList\Exception\WunderListHttpException;
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
     *
     * @throws WunderListHttpException
     */
    public function getAvatar(Avatar $entity): AvatarImg
    {
        $urlParameter = $this->serializer->toArray($entity);

        try {
            $result = $this->httpClient->get('avatar', ['query' => $urlParameter]);
        } catch (GuzzleException $exception) {
            throw new WunderListHttpException($exception->getMessage(), $exception->getCode(), $exception);
        }

        return new AvatarImg($result->getBody()->getContents());
    }

    /**
     * @param int $taskId
     *
     * @return Files
     *
     * @throws WunderListHttpException
     */
    public function getTaskFiles(int $taskId): Files
    {
        try {
            $result = $this->httpClient->get('files', ['query' => ['task_id' => $taskId]]);
        } catch (GuzzleException $exception) {
            throw new WunderListHttpException($exception->getMessage(), $exception->getCode(), $exception);
        }

        $files = $this->serializer->deserialize(
            $result->getBody()->getContents(),
            'array<' . File::class . '>',
            'json'
        );

        return new Files($files);
    }

    /**
     * @param int $listId
     *
     * @return Files
     *
     * @throws WunderListHttpException
     */
    public function getListFiles(int $listId): Files
    {
        try {
            $result = $this->httpClient->get('files', ['query' => ['list_id' => $listId]]);
        } catch (GuzzleException $exception) {
            throw new WunderListHttpException($exception->getMessage(), $exception->getCode(), $exception);
        }

        $files = $this->serializer->deserialize(
            $result->getBody()->getContents(),
            'array<' . File::class . '>',
            'json'
        );

        return new Files($files);
    }
}
