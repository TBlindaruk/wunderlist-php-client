<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\ResponseEntity;

/**
 * Class Files
 *
 * @package Makssiis\WunderList\ResponseEntity
 */
class Files
{
    /**
     * @var array
     */
    private $files;

    /**
     * Files constructor.
     *
     * @param array $files
     */
    public function __construct(array $files)
    {
        $this->files = $files;
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return $this->files;
    }
}
