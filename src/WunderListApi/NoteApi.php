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

    /**
     * @param int $noteId
     *
     * @return object|Note
     * @throws \ReflectionException
     */
    public function get(int $noteId)
    {
        $entity = $this->getRequestEntityCreator()->note()->get($noteId);

        return $this->getEntityManager()->get($entity, Note::class);
    }

    /**
     * @param int    $taskId
     * @param string $content
     *
     * @return object|Note
     * @throws \ReflectionException
     */
    public function create(int $taskId, string $content)
    {
        $entity = $this->getRequestEntityCreator()->note()->create($taskId, $content);

        return $this->getEntityManager()->create($entity, Note::class);
    }

    /**
     * @param int    $noteId
     * @param int    $revision
     * @param string $content
     *
     * @return object|Note
     * @throws \ReflectionException
     */
    public function update(int $noteId, int $revision, string $content)
    {
        $entity = $this->getRequestEntityCreator()->note()->update($noteId,$revision,$content);

        return $this->getEntityManager()->update($entity, Note::class);
    }
}
