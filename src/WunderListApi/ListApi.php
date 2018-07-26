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

    /**
     * @param int         $listId
     * @param int         $revision
     * @param string|null $title
     *
     * @return object|ListEntity
     * @throws \ReflectionException
     */
    public function update(int $listId, int $revision, string $title = null)
    {
        $entity = $this->getRequestEntityCreator()->list()->update($listId, $revision, $title);

        return $this->getEntityManager()->update($entity, ListEntity::class);
    }

    /**
     * @param int $listId
     * @param int $revision
     *
     * @return bool
     * @throws \ReflectionException
     */
    public function delete(int $listId, int $revision): bool
    {
        $entity = $this->getRequestEntityCreator()->list()->delete($listId, $revision);

        return $this->getEntityManager()->destroy($entity);
    }
}
