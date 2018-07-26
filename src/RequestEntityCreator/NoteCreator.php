<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntityCreator;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class NoteCreator
 * @package Makssiis\WunderList\RequestEntityCreator
 */
class NoteCreator
{
    public function getAllForTask(int $taskId)
    {
        /**
         * @Annotation\RequestUri("notes")
         */
        return new class($taskId)
        {
            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $task_id;

            /**
             *  constructor.
             *
             * @param int $taskId
             */
            public function __construct(int $taskId)
            {
                $this->task_id = $taskId;
            }
        };
    }
}
