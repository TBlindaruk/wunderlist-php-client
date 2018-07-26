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
}
