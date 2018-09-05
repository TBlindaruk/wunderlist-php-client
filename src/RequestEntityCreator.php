<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Makssiis\WunderList\RequestEntityCreator\AvatarCreator;
use Makssiis\WunderList\RequestEntityCreator\FileCreator;
use Makssiis\WunderList\RequestEntityCreator\FolderCreator;
use Makssiis\WunderList\RequestEntityCreator\ListCreator;
use Makssiis\WunderList\RequestEntityCreator\NoteCreator;
use Makssiis\WunderList\RequestEntityCreator\PreviewCreator;
use Makssiis\WunderList\RequestEntityCreator\RootCreator;

/**
 * Class RequestEntityCreator
 * @package Makssiis\WunderList
 */
class RequestEntityCreator
{
    /**
     * @return AvatarCreator
     */
    public function avatar(): AvatarCreator
    {
        return new AvatarCreator();
    }

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

    /**
     * @return PreviewCreator
     */
    public function preview(): PreviewCreator
    {
        return new PreviewCreator();
    }

    /**
     * @return ListCreator
     */
    public function list(): ListCreator
    {
        return new ListCreator();
    }

    /**
     * @return NoteCreator
     */
    public function note(): NoteCreator
    {
        return new NoteCreator();
    }

    /**
     * @return RootCreator
     */
    public function root(): RootCreator
    {
        return new RootCreator();
    }
}
