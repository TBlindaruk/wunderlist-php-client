<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\ResponseEntity;

/**
 * Class Preview
 * @package Makssiis\WunderList\ResponseEntity
 */
class Preview
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $size;

    /**
     * @var string
     */
    private $expires_at;

    /**
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expires_at;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
