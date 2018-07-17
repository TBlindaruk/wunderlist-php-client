<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\ResponseEntity;

/**
 * Class Folder
 * @package Makssiis\WunderList\ResponseEntity
 */
class Folder
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var array
     */
    private $list_ids;

    /**
     * @var string
     */
    private $created_at;

    /**
     * @var string
     */
    private $created_by_request_id;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getListIds(): array
    {
        return $this->list_ids;
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
    public function getCreatedByRequestId(): string
    {
        return $this->created_by_request_id;
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
