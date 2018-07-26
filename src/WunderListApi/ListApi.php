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
     * @return object|ListEntity[]
     * @throws \ReflectionException
     */
    public function getAll()
    {
        $entity = $this->getRequestEntityCreator()->list()->getAll();

        return $this->getEntityManager()->get($entity, ListEntity::class . '[]');
    }

    /**
     * @param int $listId
     *
     * @return object|ListEntity
     * @throws \ReflectionException
     */
    public function get(int $listId)
    {
        $entity = $this->getRequestEntityCreator()->list()->get($listId);

        return $this->getEntityManager()->get($entity, ListEntity::class);
    }

    /**
     * @param string $title
     *
     * @return object|ListEntity
     * @throws \ReflectionException
     */
    public function create(string $title)
    {
        $entity = $this->getRequestEntityCreator()->list()->create($title);

        return $this->getEntityManager()->create($entity, ListEntity::class);
    }
}
