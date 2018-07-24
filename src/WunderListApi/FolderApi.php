<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\ResponseEntity\Folder;

/**
 * Class FolderApi
 * @package Makssiis\WunderList\WunderListApi
 */
class FolderApi extends AbstractWunderlistApi
{
    /**
     * @return object|array
     * @throws \ReflectionException
     */
    public function getList()
    {
        $entity = $this->getRequestEntityCreator()->getFolders();

        return $this->getEntityManager()->get($entity, Folder::class . '[]');
    }

    /**
     * @param int $id
     *
     * @return object
     * @throws \ReflectionException
     */
    public function get(int $id)
    {
        $entity = $this->getRequestEntityCreator()->getFolder($id);

        return $this->getEntityManager()->get($entity, Folder::class);
    }

    /**
     * @param string $title
     * @param array  $listIds
     *
     * @return object
     * @throws \ReflectionException
     */
    public function create(string $title, array $listIds)
    {
        $entity = $this->getRequestEntityCreator()->createFolder($title, $listIds);

        return $this->getEntityManager()->create($entity, Folder::class);
    }
}
