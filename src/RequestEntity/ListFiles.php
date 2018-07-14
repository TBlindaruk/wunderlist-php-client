<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntity;

use Makssiis\WunderList\Annotation;

/**
 * Class TaskFiles
 * @package Makssiis\WunderList\RequestEntity
 * @Annotation\RequestUri("files")
 */
class ListFiles
{
    /**
     * @var int
     * @Annotation\QueryParameter()
     */
    private $list_id;

    /**
     * ListFiles constructor.
     *
     * @param int $listId
     */
    public function __construct(int $listId)
    {
        $this->list_id = $listId;
    }
}
