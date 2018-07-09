<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\ResponseEntity;

/**
 * Class File
 *
 * @package Makssiis\WunderList\ResponseEntity
 */
class File
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var int
     */
    private $taskId;

    /**
     * @var int
     */
    private $listId;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var int
     */
    private $fileSize;

    /**
     * @var string
     */
    private $localCreatedAt;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $revision;
}
