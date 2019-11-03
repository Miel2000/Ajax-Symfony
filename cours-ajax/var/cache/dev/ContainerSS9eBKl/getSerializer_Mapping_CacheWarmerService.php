<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'serializer.mapping.cache_warmer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\SerializerCacheWarmer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Loader\\AnnotationLoader.php';

return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDirs[0].'/serialization.php'), ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
