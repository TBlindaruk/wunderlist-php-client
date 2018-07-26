<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\Entity\Preview;

/**
 * Class PreviewApi
 * @package Makssiis\WunderList\WunderListApi
 */
class PreviewApi extends AbstractWunderlistApi
{
    /**
     * @param int         $fileId
     * @param string|null $platform
     * @param string|null $size
     *
     * @return object
     * @throws \ReflectionException
     */
    public function get(int $fileId, string $platform = null, string $size = null)
    {
        $entity = $this->getRequestEntityCreator()->preview()->get($fileId, $platform, $size);

        return $this->getEntityManager()->get($entity, Preview::class);
    }
}
