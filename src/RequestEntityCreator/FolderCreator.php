<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntityCreator;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class FolderCreator
 * @package Makssiis\WunderList\RequestEntityCreator
 */
class FolderCreator
{
    /**
     * @return object
     */
    public function getList()
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
    public function get(int $id)
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
    public function create(string $title, array $listIds)
    {
        /**
         * @Annotation\RequestUri("folders")
         */
        return new class($title, $listIds)
        {
            /**
             * @var string
             * FIXME: Max Length should be 255
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

    /**
     * @param int         $folderId
     * @param int         $revision
     * @param string|null $title
     * @param array|null  $listIds
     *
     * @return object
     */
    public function update(int $folderId, int $revision, string $title = null, array $listIds = null)
    {
        /**
         * @Annotation\RequestUri("folders/{folder_id}")
         */
        return new class($folderId, $revision, $title, $listIds)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
             */
            private $folder_id;

            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $revision;

            /**
             * FIXME: Max Length should be 255
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
             * @param int         $folderId
             * @param int         $revision
             * @param string|null $title
             * @param array|null  $listIds
             */
            public function __construct(int $folderId, int $revision, string $title = null, array $listIds = null)
            {
                $this->folder_id = $folderId;
                $this->revision = $revision;
                $this->title = $title;
                $this->list_ids = $listIds;
            }
        };
    }

    /**
     * @param int $folderId
     * @param int $revision
     *
     * @return object
     */
    public function delete(int $folderId, int $revision)
    {
        /**
         * @Annotation\RequestUri("folders/{folder_id}")
         */
        return new class($folderId, $revision)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
             */
            private $folder_id;

            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $revision;

            /**
             *  constructor.
             *
             * @param int $folder_id
             * @param int $revision
             */
            public function __construct(int $folder_id, int $revision)
            {
                $this->folder_id = $folder_id;
                $this->revision = $revision;
            }
        };
    }
}
