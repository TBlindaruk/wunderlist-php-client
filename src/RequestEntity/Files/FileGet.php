<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntity\Files;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class FileGet
 * @package Makssiis\WunderList\RequestEntity\Files
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
