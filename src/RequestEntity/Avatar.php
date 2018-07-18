<?php

declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntity;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class Avatar
 * @package Makssiis\WunderList\RequestEntity
 *
 * @Annotation\RequestUri("avatar")
 */
class Avatar
{
    /**
     * @var int|null
     * @Annotation\QueryParameter()
     */
    private $user_id;

    /**
     * @var string|int|null
     * @Annotation\QueryParameter()
     */
    private $size;

    /**
     * @var bool
     * @Annotation\QueryParameter()
     */
    private $fallback = false;

    /**
     * Avatar constructor.
     *
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->user_id = $userId;
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
}
