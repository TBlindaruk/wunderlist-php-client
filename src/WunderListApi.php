<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Makssiis\WunderList\WunderListApi\AvatarApi;
use Makssiis\WunderList\WunderListApi\FileApi;
use Makssiis\WunderList\WunderListApi\FolderApi;
use Makssiis\WunderList\WunderListApi\PreviewApi;

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
     * @return AvatarApi
     */
    public function avatar(): AvatarApi
    {
        return new AvatarApi($this->entityManager, $this->requestEntityCreator);
    }

    /**
     * @return FileApi
     */
    public function file(): FileApi
    {
        return new FileApi($this->entityManager, $this->requestEntityCreator);
    }

    /**
     * @return PreviewApi
     */
    public function preview(): PreviewApi
    {
        return new PreviewApi($this->entityManager, $this->requestEntityCreator);
    }

    /**
     * @return FolderApi
     */
    public function folder(): FolderApi
    {
        return new FolderApi($this->entityManager, $this->requestEntityCreator);
    }
}
