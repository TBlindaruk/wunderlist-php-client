<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\Avatar\ResponseEntity;

/**
 * Class AvatarImg
 * @package Makssiis\WunderList\Avatar\ResponceEntity
 */
class AvatarImg
{
    /**
     * @var string
     */
    private $blob;

    /**
     * AvatarImg constructor.
     *
     * @param string $blob
     */
    public function __construct(string $blob)
    {
        $this->blob = $blob;
    }

    /**
     * @return string
     */
    public function getBlob(): string
    {
        return $this->blob;
    }
}
