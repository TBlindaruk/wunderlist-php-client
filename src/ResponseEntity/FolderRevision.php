<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\ResponseEntity;

/**
 * Class FolderRevision
 * @package Makssiis\WunderList\ResponseEntity
 */
class FolderRevision
{
    /**
     * @var int
     */
    private $id;

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
     * @param $id
     *
     * @return FolderRevision
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param $type
     *
     * @return FolderRevision
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getRevision(): int
    {
        return $this->revision;
    }

    /**
     * @param $revision
     *
     * @return FolderRevision
     */
    public function setRevision($revision): self
    {
        $this->revision = $revision;

        return $this;
    }
}
