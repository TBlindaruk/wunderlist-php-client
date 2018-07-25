<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\ResponseEntity\Folder;
use Makssiis\WunderList\ResponseEntity\FolderRevision;

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
        $entity = $this->getRequestEntityCreator()->folder()->getList();

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
        $entity = $this->getRequestEntityCreator()->folder()->get($id);

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
        $entity = $this->getRequestEntityCreator()->folder()->create($title, $listIds);

        return $this->getEntityManager()->create($entity, Folder::class);
    }

    /**
     * @param int         $folderId
     * @param int         $revision
     * @param string|null $title
     * @param array|null  $listIds
     *
     * @return object|Folder
     * @throws \ReflectionException
     */
    public function update(int $folderId, int $revision, string $title = null, array $listIds = null)
    {
        $entity = $this->getRequestEntityCreator()->folder()->update($folderId, $revision, $title, $listIds);

        return $this->getEntityManager()->update($entity, Folder::class);
    }

    /**
     * @param int $folderId
     * @param int $revision
     *
     * @return bool
     * @throws \ReflectionException
     */
    public function delete(int $folderId, int $revision): bool
    {
        $entity = $this->getRequestEntityCreator()->folder()->delete($folderId, $revision);

        return $this->getEntityManager()->destroy($entity);
    }

    /**
     * @return object|FolderRevision[]
     * @throws \ReflectionException
     */
    public function getRevisions()
    {
        $entity = $this->getRequestEntityCreator()->folder()->getRevisions();

        return $this->getEntityManager()->get($entity, FolderRevision::class . '[]');
    }
}
