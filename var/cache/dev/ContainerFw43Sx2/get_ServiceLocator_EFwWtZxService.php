<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.eFwWtZx' shared service.

return $this->privates['.service_locator.eFwWtZx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService.php', true],
    'usuariosRepository' => ['privates', 'App\\Repository\\UsuariosRepository', 'getUsuariosRepositoryService.php', true],
], [
    'logger' => '?',
    'usuariosRepository' => 'App\\Repository\\UsuariosRepository',
]);
