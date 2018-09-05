<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntityCreator;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class RootCreator
 * @package Makssiis\WunderList\RequestEntityCreator
 */
class RootCreator
{
    public function get()
    {
        /**
         * @Annotation\RequestUri("root")
         */
        return new class ()
        {
        };
    }
}
