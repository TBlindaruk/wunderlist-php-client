<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntityCreator;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class ListCreator
 * @package Makssiis\WunderList\RequestEntityCreator
 */
class ListCreator
{
    /**
     * @return object
     */
    public function getAll()
    {
        /**
         * @Annotation\RequestUri("lists")
         */
        return new class ()
        {
        };
    }

    /**
     * @param int $listId
     *
     * @return object
     */
    public function get(int $listId)
    {
        /**
         * @Annotation\RequestUri("lists/{list_id}")
         */
        return new class($listId)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
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
     * @param string $title
     *
     * @return object
     */
    public function create(string $title)
    {
        /**
         * @Annotation\RequestUri("lists")
         */
        return new class($title)
        {
            /**
             * @var string
             * @Annotation\QueryParameter()
             */
            private $title;

            /**
             *  constructor.
             *
             * @param string $title
             */
            public function __construct(string $title)
            {
                $this->title = $title;
            }
        };
    }

    public function update(int $listId, int $revision, string $title = null)
    {
        /**
         * @Annotation\RequestUri("lists/{list_id}")
         */
        return new class($listId, $revision, $title)
        {
            /**
             * @var int
             * @Annotation\UriParameter()
             */
            private $list_id;

            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $revision;

            /**
             * @var null|string
             * @Annotation\QueryParameter()
             */
            private $title;

            /**
             *  constructor.
             *
             * @param int         $listId
             * @param int         $revision
             * @param string|null $title
             */
            public function __construct(int $listId, int $revision, string $title = null)
            {
                $this->list_id = $listId;
                $this->revision = $revision;
                $this->title = $title;
            }
        };
    }
}
