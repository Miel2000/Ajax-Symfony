<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.qh2ix8p' shared service.

return $this->privates['.service_locator.qh2ix8p'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['repo' => function (): \App\Repository\PostRepository {
    return ($this->privates['App\\Repository\\PostRepository'] ?? $this->load('getPostRepositoryService.php'));
}]);
