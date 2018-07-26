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
}
