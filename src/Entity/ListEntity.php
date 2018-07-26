<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\Entity;

/**
 * Class ListEntity
 * @package Makssiis\WunderList\Entity
 */
class ListEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $created_at;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $list_type;

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
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getListType(): string
    {
        return $this->list_type;
    }

    /**
     * @param string $list_type
     */
    public function setListType(string $list_type): void
    {
        $this->list_type = $list_type;
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
}
