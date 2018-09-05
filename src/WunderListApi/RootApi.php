<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\Entity\Root;

/**
 * Class RootApi
 * @package Makssiis\WunderList\WunderListApi
 */
class RootApi extends AbstractWunderlistApi
{
    /**
     * @return object
     * @throws \ReflectionException
     */
    public function get()
    {
        $entity = $this->getRequestEntityCreator()->root()->get();

        return $this->getEntityManager()->get($entity, Root::class);
    }
}
