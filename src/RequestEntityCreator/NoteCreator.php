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
    /**
     * @param int $taskId
     *
     * @return object
     */
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

    /**
     * @param int $listId
     *
     * @return object
     */
    public function getAllForList(int $listId)
    {
        /**
         * @Annotation\RequestUri("notes")
         */
        return new class($listId)
        {
            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $list_id;

            /**
             *  constructor.
             *
             * @param int $listId
             */
            public function __construct(int $listId)
            {
                $this->list_id = $listId;
            }
        };
    }

    /**
     * @param int $noteId
     *
     * @return object
     */
    public function get(int $noteId)
    {
        /**
         * @Annotation\RequestUri("notes/{note_id}")
         */
        return new class($noteId)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
             */
            private $note_id;

            /**
             *  constructor.
             *
             * @param int $noteId
             */
            public function __construct(int $noteId)
            {
                $this->note_id = $noteId;
            }
        };
    }

    /**
     * @param int    $taskId
     * @param string $content
     *
     * @return object
     */
    public function create(int $taskId, string $content)
    {
        /**
         * @Annotation\RequestUri("notes")
         */
        return new class($taskId, $content)
        {
            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $task_id;

            /**
             * @var string
             * @Annotation\QueryParameter()
             */
            private $content;

            /**
             *  constructor.
             *
             * @param int    $taskId
             * @param string $content
             */
            public function __construct(int $taskId, string $content)
            {
                $this->task_id = $taskId;
                $this->content = $content;
            }
        };
    }

    /**
     * @param int    $noteId
     * @param int    $revision
     * @param string $content
     *
     * @return object
     */
    public function update(int $noteId, int $revision, string $content)
    {
        /**
         * @Annotation\RequestUri("notes/{noteId}")
         */
        return new class($noteId, $revision, $content)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
             */
            private $noteId;

            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $revision;

            /**
             * @var string
             * @Annotation\QueryParameter()
             */
            private $content;

            /**
             *  constructor.
             *
             * @param int    $noteId
             * @param int    $revision
             * @param string $content
             */
            public function __construct(int $noteId, int $revision, string $content)
            {
                $this->noteId = $noteId;
                $this->revision = $revision;
                $this->content = $content;
            }
        };
    }

    /**
     * @param int $noteId
     * @param int $revision
     *
     * @return object
     */
    public function delete(int $noteId, int $revision)
    {
        /**
         * @Annotation\RequestUri("notes/{noteId}")
         */
        return new class($noteId, $revision)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
             */
            private $noteId;

            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $revision;

            /**
             *  constructor.
             *
             * @param int $noteId
             * @param int $revision
             */
            public function __construct(int $noteId, int $revision)
            {
                $this->noteId = $noteId;
                $this->revision = $revision;
            }
        };
    }
}
