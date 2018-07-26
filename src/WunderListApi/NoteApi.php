<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\Entity\Note;

/**
 * Class NoteApi
 * @package Makssiis\WunderList\WunderListApi
 */
class NoteApi extends AbstractWunderlistApi
{
    /**
     * @param int $taskId
     *
     * @return object|Note[]
     * @throws \ReflectionException
     */
    public function getAllForTask(int $taskId)
    {
        $entity = $this->getRequestEntityCreator()->note()->getAllForTask($taskId);

        return $this->getEntityManager()->get($entity, Note::class . '[]');
    }

    /**
     * @param int $listId
     *
     * @return object|Note[]
     * @throws \ReflectionException
     */
    public function getAllForList(int $listId)
    {
        $entity = $this->getRequestEntityCreator()->note()->getAllForList($listId);

        return $this->getEntityManager()->get($entity, Note::class . '[]');
    }
}
