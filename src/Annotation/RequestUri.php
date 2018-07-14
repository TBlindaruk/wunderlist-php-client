<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\Annotation;

/**
 * Class RequestUri
 * @package Makssiis\WunderList\Annotation
 *
 * @Annotation
 */
class RequestUri
{
    /**
     * @var string
     */
    protected $uri;

    /**
     * @param array $options
     */
    public function __construct(array $options)
    {
        if (empty($options['value']) || !\is_string($options['value'])) {
            throw new \InvalidArgumentException('Property "values" is required and should be string');
        }
        $this->uri = $options['value'];

    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
}
