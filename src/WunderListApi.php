<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Makssiis\WunderList\RequestEntity\Avatar;
use Makssiis\WunderList\RequestEntity\ListFiles;
use Makssiis\WunderList\RequestEntity\TaskFiles;
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
     * @return AvatarImg
     * @throws \ReflectionException
     */
    public function getAvatar(Avatar $entity): AvatarImg
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->entityManager->get($entity,AvatarImg::class,false);
    }

    /**
     * @param TaskFiles $taskFiles
     *
     * @return Files
     * @throws \ReflectionException
     */
    public function getTaskFiles(TaskFiles $taskFiles): Files
    {
        $result = $this->entityManager->get($taskFiles,'array<' . File::class . '>');

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
        $result = $this->entityManager->get($listFiles,'array<' . File::class . '>');

        return new Files($result);
    }
}
