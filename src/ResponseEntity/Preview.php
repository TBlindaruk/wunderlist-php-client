<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\ResponseEntity;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Preview
 * @package Makssiis\WunderList\ResponseEntity
 */
class Preview
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $url;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $size;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $expiresAt;

    /**
     * @var string
     * @Serializer\Type("string")
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
        return $this->expiresAt;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
