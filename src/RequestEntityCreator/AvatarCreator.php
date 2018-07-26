<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntityCreator;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class AvatarCreator
 * @package Makssiis\WunderList\RequestEntityCreator
 */
class AvatarCreator
{
    /**
     * @param int   $userId
     * @param mixed $size
     * @param bool  $fallback
     *
     * @return object
     */
    public function get(int $userId, $size = null, bool $fallback = false)
    {
        /**
         * @Annotation\RequestUri("avatar")
         */
        return new class($userId, $size, $fallback)
        {
            /**
             * @var int|null
             * @Annotation\QueryParameter()
             */
            private $user_id;

            /**
             * @var string|int|null
             * @Annotation\QueryParameter()
             */
            private $size;

            /**
             * @var bool
             * @Annotation\QueryParameter()
             */
            private $fallback;

            /**
             * Size should be on of the values 25, 28, 30, 32, 50, 54, 56, 60, 64, 108, 128, 135, 256, 270, 512,
             * 'original'
             *  constructor.
             *
             * @param int  $userId
             * @param      $size
             * @param bool $fallback
             */
            public function __construct(int $userId, $size = null, bool $fallback = false)
            {
                $this->user_id = $userId;
                $this->size = $size;
                $this->fallback = $fallback;
            }
        };
    }
}
