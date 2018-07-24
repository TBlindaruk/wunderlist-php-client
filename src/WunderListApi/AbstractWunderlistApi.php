<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\WunderListApi;

use Makssiis\WunderList\EntityManager;
use Makssiis\WunderList\RequestEntityCreator;

/**
 * Class AbstractWunderlistApi
 * @package Makssiis\WunderList\WunderListApi
 */
abstract class AbstractWunderlistApi
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var RequestEntityCreator
     */
    private $requestEntityCreator;

    /**
     * AbstractWunderlistApi constructor.
     *
     * @param EntityManager        $entityManager
     * @param RequestEntityCreator $requestEntityCreator
     */
    public function __construct(EntityManager $entityManager, RequestEntityCreator $requestEntityCreator)
    {
        $this->entityManager = $entityManager;
        $this->requestEntityCreator = $requestEntityCreator;
    }

    /**
     * @return EntityManager
     */
    protected function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }

    /**
     * @return RequestEntityCreator
     */
    protected function getRequestEntityCreator(): RequestEntityCreator
    {
        return $this->requestEntityCreator;
    }
}