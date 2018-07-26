<?php
declare(strict_types = 1);

namespace Makssiis\WunderList\RequestEntityCreator;

use Makssiis\WunderList\EntityManager\Annotation;

/**
 * Class PreviewCreator
 * @package Makssiis\WunderList\RequestEntityCreator
 */
class PreviewCreator
{
    /**
     * @param int         $fileId
     * @param string|null $platform
     * @param string|null $size
     *
     * @return object
     */
    public function get(int $fileId, string $platform = null, string $size = null)
    {
        /**
         * @Annotation\RequestUri("previews")
         */
        return new class($fileId, $platform, $size)
        {
            /**
             * @var int
             * @Annotation\QueryParameter()
             */
            private $file_id;

            /**
             * @var string
             * @Annotation\QueryParameter()
             */
            private $platform;

            /**
             * @var string
             * @Annotation\QueryParameter()
             */
            private $size;

            /**
             * Preview constructor.
             *
             * @param int         $fileId
             * @param string|null $platform
             * @param string|null $size
             */
            public function __construct(int $fileId, string $platform = null, string $size = null)
            {
                $this->file_id = $fileId;
                if (null !== $platform) {
                    $this->setPlatform($platform);
                }
                if (null !== $size) {
                    $this->setSize($size);
                }
            }


            private function setPlatform(string $platform): void
            {
                if (!\in_array($platform, ['mac', 'web', 'windows', 'iphone', 'ipad', 'android'], true)) {
                    throw new \InvalidArgumentException(
                        sprintf('"platform" should be "mac", "web", "windows", "iphone", "ipad", "android %s given"',
                            $platform)
                    );
                }

                $this->platform = $platform;
            }

            /**
             * @param string $size
             */
            private function setSize(string $size): void
            {
                if (!\in_array($size, ['nonretina', 'retina'], true)) {
                    throw new \InvalidArgumentException(
                        sprintf('"size" should be "nonretina" or "retina", [%s] given', $size)
                    );
                }

                $this->size = $size;
            }
        };
    }
}
