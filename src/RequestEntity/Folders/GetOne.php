<?php

declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntity\Folders;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class GetList
 * @package Makssiis\WunderList\RequestEntity\Folder
 * @Annotation\RequestUri("folders/{id}")
 */
class GetOne
{
    /**
     * @var int
     * @Annotation\UriParameter()
     */
    private $id;

    /**
     * GetOne constructor.
     *
     * @param int $id
     */
    public function __construct(int  $id)
    {
        $this->id = $id;
    }
}
