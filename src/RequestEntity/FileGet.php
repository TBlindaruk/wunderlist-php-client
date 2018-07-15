<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntity;

use Makssiis\WunderList\Annotation;

/**
 * Class FileGet
 * @package Makssiis\WunderList\RequestEntity
 * @Annotation\RequestUri("files/{id}")
 */
class FileGet
{
    /**
     * @var int
     * @Annotation\UriParameter()
     */
    private $id;

    /**
     * FileGet constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
