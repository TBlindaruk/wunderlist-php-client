<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\Entity;

/**
 * Class Note
 * @package Makssiis\WunderList\Entity
 */
class Note
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $revision;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $task_id;

    /**
     * @var string
     */
    private $created_by_request_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getRevision(): int
    {
        return $this->revision;
    }

    /**
     * @param int $revision
     */
    public function setRevision(int $revision): void
    {
        $this->revision = $revision;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getTaskId(): int
    {
        return $this->task_id;
    }

    /**
     * @param int $task_id
     */
    public function setTaskId(int $task_id): void
    {
        $this->task_id = $task_id;
    }

    /**
     * @return string
     */
    public function getCreatedByRequestId(): string
    {
        return $this->created_by_request_id;
    }

    /**
     * @param string $created_by_request_id
     */
    public function setCreatedByRequestId(string $created_by_request_id): void
    {
        $this->created_by_request_id = $created_by_request_id;
    }
}
