<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntity\Files;

use Makssiis\WunderList\Annotation;

/**
 * Class FileGet
 * @package Makssiis\WunderList\RequestEntity\Files
 * @Annotation\RequestUri("files/{id}")
 */
class FileDestroy
{
    /**
     * @var int
     * @Annotation\UriParameter()
     */
    private $id;

    /**
     * @var int
     * @Annotation\QueryParameter()
     */
    private $revision;

    /**
     * FileDestroy constructor.
     *
     * @param int $id
     * @param int $revision
     */
    public function __construct(int $id, int $revision)
    {
        $this->id = $id;
        $this->revision = $revision;
    }
}
