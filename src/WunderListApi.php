<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Makssiis\WunderList\RequestEntity\Avatar;
use Makssiis\WunderList\RequestEntity\Files\FileDestroy;
use Makssiis\WunderList\RequestEntity\Files\FileGet;
use Makssiis\WunderList\RequestEntity\Files\ListFiles;
use Makssiis\WunderList\RequestEntity\Files\TaskFiles;
use Makssiis\WunderList\RequestEntity\Folders\GetList as GetFolders;
use Makssiis\WunderList\RequestEntity\Folders\GetOne as GetFolder;
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
     * WunderListApi constructor.
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
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
     * @param TaskFiles $taskFiles
     *
     * @return Files
     * @throws \ReflectionException
     */
    public function getTaskFiles(TaskFiles $taskFiles): Files
    {
        /** @var array $result */
        $result = $this->entityManager->get($taskFiles, File::class . '[]');

        return new Files($result);
    }

    /**
     * @param ListFiles $listFiles
     *
     * @return Files
     * @throws \ReflectionException
     */
    public function getListFiles(ListFiles $listFiles): Files
    {
        /** @var array $result */
        $result = $this->entityManager->get($listFiles, File::class . '[]');

        return new Files($result);
    }

    /**
     * @param FileGet $fileGet
     *
     * @return object
     * @throws \ReflectionException
     */
    public function getFile(FileGet $fileGet)
    {
        return $this->entityManager->get($fileGet, File::class);
    }

    /**
     * @param FileDestroy $entity
     *
     * @return bool
     * @throws \ReflectionException
     */
    public function destroyFile(FileDestroy $entity): bool
    {
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
        return $this->entityManager->get(new GetFolders(), Folder::class . '[]');
    }

    /**
     * @param GetFolder $entity
     *
     * @return object
     * @throws \ReflectionException
     */
    public function getFolder(GetFolder $entity)
    {
        return $this->entityManager->get($entity, Folder::class);
    }
}
