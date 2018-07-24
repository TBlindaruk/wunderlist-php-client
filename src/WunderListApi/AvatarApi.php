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
     * @param Avatar $entity
     *
     * @return AvatarImg|object
     * @throws \ReflectionException
     */
    public function get(Avatar $entity)
    {
        return $this->getEntityManager()->get($entity, AvatarImg::class, false);
    }
}
