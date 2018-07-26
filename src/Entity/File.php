<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\Entity;

/**
 * Class File
 * @package Makssiis\WunderList\Entity
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
     * @var int|null
     */
    private $task_id;

    /**
     * @var int|null
     */
    private $list_id;

    /**
     * @var int
     */
    private $user_id;

    /**
     * @var string
     */
    private $file_name;

    /**
     * @var string
     */
    private $content_type;

    /**
     * @var int
     */
    private $file_size;

    /**
     * @var string
     */
    private $local_created_at;

    /**
     * @var string
     */
    private $created_at;

    /**
     * @var string
     */
    private $updated_at;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
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
        return $this->task_id;
    }

    /**
     * @return int|null
     */
    public function getListId(): ?int
    {
        return $this->list_id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->file_name;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->content_type;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->file_size;
    }

    /**
     * @return string
     */
    public function getLocalCreatedAt(): string
    {
        return $this->local_created_at;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
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
