<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\ResponseEntity\File;
use Makssiis\WunderList\ResponseEntity\Files;

/**
 * Class FileApi
 * @package Makssiis\WunderList\WunderListApi
 */
class FileApi extends AbstractWunderlistApi
{
    /**
     * @param int $taskId
     *
     * @return Files
     * @throws \ReflectionException
     */
    public function getTaskFiles(int $taskId): Files
    {
        $entity = $this->getRequestEntityCreator()->getTaskFiles($taskId);
        /** @var array $result */
        $result = $this->getEntityManager()->get($entity, File::class . '[]');

        return new Files($result);
    }

    /**
     * @param int $listId
     *
     * @return Files
     * @throws \ReflectionException
     */
    public function getListFiles(int $listId): Files
    {
        $entity = $this->getRequestEntityCreator()->getListFiles($listId);
        /** @var array $result */
        $result = $this->getEntityManager()->get($entity, File::class . '[]');

        return new Files($result);
    }

    /**
     * @param int $fileId
     *
     * @return object
     * @throws \ReflectionException
     */
    public function get(int $fileId)
    {
        $entity = $this->getRequestEntityCreator()->getFile($fileId);

        return $this->getEntityManager()->get($entity, File::class);
    }

    /**
     * @param int $id
     * @param int $revision
     *
     * @return bool
     * @throws \ReflectionException
     */
    public function destroy(int $id, int $revision): bool
    {
        $entity = $this->getRequestEntityCreator()->destroyFile($id, $revision);

        return $this->getEntityManager()->destroy($entity);
    }
}
