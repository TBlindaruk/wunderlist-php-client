<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\RequestEntity\Avatar;
use Makssiis\WunderList\ResponseEntity\AvatarImg;

/**
 * Class AvatarApi
 * @package Makssiis\WunderList\WunderListApi
 */
class AvatarApi extends AbstractWunderlistApi
{

    /**
     * @param int  $userId
     * @param null $size
     * @param bool $fallback
     *
     * @return object|AvatarImg
     * @throws \ReflectionException
     */
    public function get(int $userId, $size = null, bool $fallback = false)
    {
        $entity = $this->getRequestEntityCreator()->avatar()->get($userId, $size, $fallback);

        return $this->getEntityManager()->get($entity, AvatarImg::class, false);
    }
}
