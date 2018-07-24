<?php
declare(strict_types = 1);

namespace Makssiis\WunderList;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class RequestEntityCreator
 * @package Makssiis\WunderList
 */
class RequestEntityCreator
{
    /**
     * @param int $taskId
     *
     * @return object
     */
    public function getTaskFiles(int $taskId)
    {
        /**
         * @Annotation\RequestUri("files")
         */
        return new class ($taskId)
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
    public function getListFiles(int $listId)
    {
        /**
         * @Annotation\RequestUri("files")
         */
        return new class ($listId)
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
     * @param int $fileId
     *
     * @return object
     */
    public function getFile(int $fileId)
    {
        /**
         * @Annotation\RequestUri("files/{id}")
         */
        return new class ($fileId)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
             */
            private $id;

            /**
             *  constructor.
             *
             * @param int $id
             */
            public function __construct(int $id)
            {
                $this->id = $id;
            }
        };
    }

    /**
     * @param int $id
     * @param int $revision
     *
     * @return object
     */
    public function destroyFile(int $id, int $revision)
    {
        /**
         * @Annotation\RequestUri("files/{id}")
         */
        return new class($id, $revision)
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
             *  constructor.
             *
             * @param int $id
             * @param int $revision
             */
            public function __construct(int $id, int $revision)
            {
                $this->id = $id;
                $this->revision = $revision;
            }
        };
    }

    /**
     * @return object
     */
    public function getFolders()
    {
        /**
         * @Annotation\RequestUri("folders")
         */
        return new class ()
        {
        };
    }

    /**
     * @param int $id
     *
     * @return object
     */
    public function getFolder(int $id)
    {
        /**
         * @Annotation\RequestUri("folders/{id}")
         */
        return new class($id)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
             */
            private $id;

            /**
             *  constructor.
             *
             * @param int $id
             */
            public function __construct(int $id)
            {
                $this->id = $id;
            }
        };
    }

    /**
     * @param string $title
     * @param array  $listIds
     *
     * @return object
     */
    public function createFolder(string $title, array $listIds)
    {
        /**
         * @Annotation\RequestUri("folders")
         */
        return new class($title, $listIds)
        {
            /**
             * @var string
             * @Annotation\QueryParameter()
             */
            private $title;

            /**
             * @var array
             * @Annotation\QueryParameter()
             */
            private $list_ids;

            /**
             *  constructor.
             *
             * @param string $title
             * @param array  $listIds
             */
            public function __construct(string $title, array $listIds)
            {
                $this->title = $title;
                $this->list_ids = $listIds;
            }
        };
    }
}
