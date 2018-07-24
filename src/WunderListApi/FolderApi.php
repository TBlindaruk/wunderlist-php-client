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
     * @return object|array|Folder[]
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
     * @return object|Folder
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
     * @return object|Folder
     * @throws \ReflectionException
     */
    public function create(string $title, array $listIds)
    {
        $entity = $this->getRequestEntityCreator()->createFolder($title, $listIds);

        return $this->getEntityManager()->create($entity, Folder::class);
    }

    /**
     * @param int         $folderId
     * @param int         $revision
     * @param string|null $title
     * @param array|null  $listIds
     *
     * @return object
     * @throws \ReflectionException
     */
    public function update(int $folderId, int $revision, string $title = null, array $listIds = null)
    {
        $entity = $this->getRequestEntityCreator()->updateFolder($folderId, $revision, $title, $listIds);

        return $this->getEntityManager()->update($entity, Folder::class);
    }
}
