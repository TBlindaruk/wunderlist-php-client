<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntity;

use Makssiis\WunderList\Annotation;

/**
 * Class TaskFiles
 * @package Makssiis\WunderList\RequestEntity
 * @Annotation\RequestUri("files")
 */
class TaskFiles
{
    /**
     * @var int
     * @Annotation\QueryParameter()
     */
    private $task_id;

    /**
     * TaskFiles constructor.
     *
     * @param int $taskId
     */
    public function __construct(int $taskId)
    {
        $this->task_id = $taskId;
    }
}
