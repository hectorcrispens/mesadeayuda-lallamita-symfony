<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.iVnz5A2' shared service.

return $this->privates['.service_locator.iVnz5A2'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('error' => function (): \App\Service\error {
    return ($this->privates['App\Service\error'] ?? $this->privates['App\Service\error'] = new \App\Service\error());
}));