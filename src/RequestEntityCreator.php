<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Makssiis\WunderList\RequestEntityCreator\FileCreator;
use Makssiis\WunderList\RequestEntityCreator\FolderCreator;

/**
 * Class RequestEntityCreator
 * @package Makssiis\WunderList
 */
class RequestEntityCreator
{
    /**
     * @return FileCreator
     */
    public function file(): FileCreator
    {
        return new FileCreator();
    }

    /**
     * @return FolderCreator
     */
    public function folder(): FolderCreator
    {
        return new FolderCreator();
    }
}
