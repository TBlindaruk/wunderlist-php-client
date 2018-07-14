<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\Annotation;

use Doctrine\Common\Annotations\Reader;

/**
 * Class Resolver
 * @package Makssiis\WunderList\Annotation
 */
class Resolver
{
    /**
     * @var Reader
     */
    private $reader;

    /**
     * Resolver constructor.
     *
     * @param Reader $reader
     */
    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    /**
     * @param string|object $type
     *
     * @return null|string
     * @throws \ReflectionException
     */
    public function getUri($type): ?string
    {
        $class = $this->getReflectionClass($type);

        /** @var RequestUri|null $annotationClass */
        $annotationClass = $this->reader->getClassAnnotation($class, RequestUri::class);

        return null === $annotationClass ? null : $annotationClass->getUri();
    }

    /**
     * @param string|object $object
     *
     * @return array
     * @throws \ReflectionException
     */
    public function getQueryParameters($object): array
    {
        $class = $this->getReflectionClass($object);

        $propertyValues = [];

        foreach ($class->getProperties() as $property) {
            if ($annotation = $this->reader->getPropertyAnnotation($property, QueryParameter::class)) {
                $property->setAccessible(true);

                $propertyValues[$property->getName()] = $property->getValue($object);
            }
        }

        return $propertyValues;
    }

    /**
     * @param $object
     *
     * @return \ReflectionClass
     * @throws \ReflectionException
     */
    protected function getReflectionClass($object): \ReflectionClass
    {
        if (!\is_string($object) && !\is_object($object)) {
            throw new \InvalidArgumentException('"type" should be string or object');
        }

        return new \ReflectionClass($object);
    }
}
