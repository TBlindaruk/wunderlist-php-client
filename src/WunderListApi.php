<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Makssiis\WunderList\RequestEntity\Avatar;
use Makssiis\WunderList\RequestEntity\Preview;
use Makssiis\WunderList\ResponseEntity\AvatarImg;
use Makssiis\WunderList\ResponseEntity\File;
use Makssiis\WunderList\ResponseEntity\Files;
use Makssiis\WunderList\ResponseEntity\Folder;

/**
 * Class WunderListApi
 *
 * @package Makssiis\WunderList
 */
class WunderListApi
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var RequestEntityCreator
     */
    private $requestEntityCreator;

    /**
     * WunderListApi constructor.
     *
     * @param EntityManager        $entityManager
     * @param RequestEntityCreator $requestEntityCreator
     */
    public function __construct(EntityManager $entityManager, RequestEntityCreator $requestEntityCreator)
    {
        $this->entityManager = $entityManager;
        $this->requestEntityCreator = $requestEntityCreator;
    }

    /**
     * @param Avatar $entity
     *
     * @return object
     * @throws \ReflectionException
     */
    public function getAvatar(Avatar $entity)
    {
        return $this->entityManager->get($entity, AvatarImg::class, false);
    }

    /**
     * @param int $taskId
     *
     * @return Files
     * @throws \ReflectionException
     */
    public function getTaskFiles(int $taskId): Files
    {
        $entity = $this->requestEntityCreator->getTaskFiles($taskId);
        /** @var array $result */
        $result = $this->entityManager->get($entity, File::class . '[]');

        return new Files($result);
    }

    /**
     * @param int $listId
     *
     * @return Files
     * @throws \ReflectionException
     */
    public function getListFiles(int $listId): Files
    {
        $entity = $this->requestEntityCreator->getListFiles($listId);
        /** @var array $result */
        $result = $this->entityManager->get($entity, File::class . '[]');

        return new Files($result);
    }

    /**
     * @param int $fileId
     *
     * @return object
     * @throws \ReflectionException
     */
    public function getFile(int $fileId)
    {
        $entity = $this->requestEntityCreator->getFile($fileId);

        return $this->entityManager->get($entity, File::class);
    }

    /**
     * @param int $id
     * @param int $revision
     *
     * @return bool
     * @throws \ReflectionException
     */
    public function destroyFile(int $id, int $revision): bool
    {
        $entity = $this->requestEntityCreator->destroyFile($id, $revision);

        return $this->entityManager->destroy($entity);
    }

    /**
     * @param Preview $entity
     *
     * @return object
     * @throws \ReflectionException
     */
    public function getPreview(Preview $entity)
    {
        return $this->entityManager->get($entity, ResponseEntity\Preview::class);
    }

    /**
     * @return object|array
     * @throws \ReflectionException
     */
    public function getFolders()
    {
        $entity = $this->requestEntityCreator->getFolders();

        return $this->entityManager->get($entity, Folder::class . '[]');
    }

    /**
     * @param int $id
     *
     * @return object
     * @throws \ReflectionException
     */
    public function getFolder(int $id)
    {
        $entity = $this->requestEntityCreator->getFolder($id);

        return $this->entityManager->get($entity, Folder::class);
    }

    /**
     * @param string $title
     * @param array  $listIds
     *
     * @return object
     * @throws \ReflectionException
     */
    public function createFolder(string $title, array $listIds)
    {
        $entity = $this->requestEntityCreator->createFolder($title, $listIds);

        return $this->entityManager->create($entity, Folder::class);
    }
}
