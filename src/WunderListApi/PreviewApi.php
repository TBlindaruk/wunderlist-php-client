<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\RequestEntity\Preview;

/**
 * Class PreviewApi
 * @package Makssiis\WunderList\WunderListApi
 */
class PreviewApi extends AbstractWunderlistApi
{
    /**
     * @param Preview $entity
     *
     * @return object
     * @throws \ReflectionException
     */
    public function get(Preview $entity)
    {
        return $this->getEntityManager()->get($entity, \Makssiis\WunderList\ResponseEntity\Preview::class);
    }
}
