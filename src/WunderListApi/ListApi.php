<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\Entity\ListEntity;

/**
 * Class ListApi
 * @package Makssiis\WunderList\WunderListApi
 */
class ListApi extends AbstractWunderlistApi
{
    /**
     * @return object
     * @throws \ReflectionException
     */
    public function getAll()
    {
        $entity = $this->getRequestEntityCreator()->list()->getAll();

        return $this->getEntityManager()->get($entity, ListEntity::class . '[]');
    }
}
