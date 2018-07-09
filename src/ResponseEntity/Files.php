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
    private $files;

    public function __construct(array $files)
    {
        $this->files = $files;
    }

    public function getFiles()
    {
        return $this->files;
    }
}
