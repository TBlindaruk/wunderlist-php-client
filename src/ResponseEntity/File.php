<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\ResponseEntity;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class File
 * @package Makssiis\WunderList\ResponseEntity
 */
class File
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $url;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $taskId;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $listId;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $fileName;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $contentType;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $fileSize;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $localCreatedAt;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $type;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $revision;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return int|null
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @return int|null
     */
    public function getListId(): ?int
    {
        return $this->listId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    /**
     * @return string
     */
    public function getLocalCreatedAt(): string
    {
        return $this->localCreatedAt;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getRevision(): int
    {
        return $this->revision;
    }
}
