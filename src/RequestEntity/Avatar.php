<?php

declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntity;

/**
 * Class Avatar
 *
 * @package Makssiis\WunderList\RequestEntity
 */
class Avatar
{
    /**
     * @var int|null
     */
    protected $userId;

    /**
     * @var string|int|null
     */
    protected $size;

    /**
     * @var bool
     */
    protected $fallback = false;

    /**
     * Avatar constructor.
     *
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    /**
     * Should be on of the values 25, 28, 30, 32, 50, 54, 56, 60, 64, 108, 128, 135, 256, 270, 512, 'original'
     *
     * @param int $size
     *
     * @return $this
     */
    public function setSize($size): Avatar
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return Avatar
     */
    public function setFallback(): Avatar
    {
        $this->fallback = true;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return int|null|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return bool
     */
    public function getFallback(): bool
    {
        return $this->fallback;
    }
}
